<?php

namespace App\Services;

use App\Models\Mentor;
use App\Models\Mentee;
use App\Models\MentorMentee;
use App\Services\Notification\FirebaseNotificationService;
use Illuminate\Support\Facades\Log;

class MentorMenteeAssignmentService
{
    /**
     * Assign mentees to a mentor based on track and institute
     * @param Mentor $mentor
     * @return array
     */
    public function assignMenteesToMentor(Mentor $mentor)
    {
        $assignedCount = 0;
        $maxMentees = 10;
        $checkedMenteeIds = [];
        $currentMenteeCount = MentorMentee::where('mentor_id', $mentor->id)->count();
        if ($currentMenteeCount >= $maxMentees) {
            return [
                'assigned' => 0,
                'message' => 'Mentor already has maximum number of mentees (10)',
                'total_mentees' => $currentMenteeCount
            ];
        }
        $remainingSlots = $maxMentees - $currentMenteeCount;
        $track = $mentor->track;
        $institute = $mentor->institute;
        if (!$track) {
            return [
                'assigned' => 0,
                'message' => 'Mentor track not specified',
                'total_mentees' => $currentMenteeCount
            ];
        }
        if ($institute !== '3mtt') {
            return [
                'assigned' => 0,
                'message' => 'Mentor is not from 3mtt institute',
                'total_mentees' => $currentMenteeCount
            ];
        }
        while ($assignedCount < $remainingSlots) {
            $menteesQuery = Mentee::where('track', $track)
                ->where('institute', '3mtt')
                ->whereNotIn('id', $checkedMenteeIds);
            $mentees = $menteesQuery->inRandomOrder()
                ->limit($remainingSlots - $assignedCount)
                ->get();
            if ($mentees->isEmpty()) {
                break;
            }
            foreach ($mentees as $mentee) {
                $checkedMenteeIds[] = $mentee->id;
                $alreadyAssigned = MentorMentee::where('mentee_id', $mentee->id)->exists();
                if (!$alreadyAssigned) {
                    MentorMentee::create([
                        'mentor_id' => $mentor->id,
                        'mentee_id' => $mentee->id,
                    ]);
                    $assignedCount++;
                    if ($assignedCount >= $remainingSlots) {
                        break 2;
                    }
                }
            }
        }
        $finalMenteeCount = MentorMentee::where('mentor_id', $mentor->id)->count();
        if ($assignedCount > 0) {
            try {
                $firebaseNotificationService = app(FirebaseNotificationService::class);
                $firebaseNotificationService->sendMenteeAssignmentNotification($mentor, $assignedCount);
            } catch (\Exception $e) {
                Log::error('Failed to send Firebase mentee assignment notification', [
                    'mentor_id' => $mentor->id,
                    'error' => $e->getMessage()
                ]);
            }
        }
        return [
            'assigned' => $assignedCount,
            'message' => "Assigned {$assignedCount} new mentees to mentor",
            'total_mentees' => $finalMenteeCount,
            'remaining_slots' => $maxMentees - $finalMenteeCount
        ];
    }

    /**
     * Assign a mentor to a mentee based on track and institute
     * @param Mentee $mentee
     * @return array
     */
    public function assignMentorToMentee(Mentee $mentee)
    {
        $track = $mentee->track;
        $institute = $mentee->institute;
        if (!$track || $institute !== '3mtt') {
            return [
                'assigned' => false,
                'message' => 'Mentee must have a track and be from 3mtt institute.'
            ];
        }
        // Check if already assigned
        $alreadyAssigned = MentorMentee::where('mentee_id', $mentee->id)->exists();
        if ($alreadyAssigned) {
            return [
                'assigned' => false,
                'message' => 'Mentee already assigned to a mentor.'
            ];
        }
        // Find available mentor
        $mentor = Mentor::where('track', $track)
            ->where('institute', '3mtt')
            ->where('status', 'approved')
            ->whereRaw('(SELECT COUNT(*) FROM mentor_mentees WHERE mentor_mentees.mentor_id = mentors.id) < 10')
            ->inRandomOrder()
            ->first();
        if (!$mentor) {
            return [
                'assigned' => false,
                'message' => 'No available mentor found for this track.'
            ];
        }
        MentorMentee::create([
            'mentor_id' => $mentor->id,
            'mentee_id' => $mentee->id,
        ]);
        // Optionally notify mentor
        try {
            $firebaseNotificationService = app(FirebaseNotificationService::class);
            $firebaseNotificationService->sendMenteeAssignmentNotification($mentor, 1);
        } catch (\Exception $e) {
            Log::error('Failed to send Firebase mentee assignment notification (mentee update)', [
                'mentor_id' => $mentor->id,
                'mentee_id' => $mentee->id,
                'error' => $e->getMessage()
            ]);
        }
        return [
            'assigned' => true,
            'message' => 'Mentor assigned to mentee.',
            'mentor_id' => $mentor->id
        ];
    }
} 