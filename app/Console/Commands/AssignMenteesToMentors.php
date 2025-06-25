<?php

namespace App\Console\Commands;

use App\Http\Controllers\Mentor\MentorManager;
use App\Models\Mentor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class AssignMenteesToMentors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mentors:assign-mentees {--mentor-id= : Assign mentees to a specific mentor} {--dry-run : Show what would be done without actually doing it}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically assign mentees to mentors from 3mtt institute based on track';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $mentorManager = new MentorManager();
        $dryRun = $this->option('dry-run');
        $specificMentorId = $this->option('mentor-id');

        if ($dryRun) {
            $this->info('DRY RUN MODE - No changes will be made');
        }

        if ($specificMentorId) {
            // Assign mentees to a specific mentor
            $mentor = Mentor::find($specificMentorId);
            
            if (!$mentor) {
                $this->error("Mentor with ID {$specificMentorId} not found");
                return 1;
            }

            // Check if mentor is from 3mtt institute
            if ($mentor->institute !== '3mtt') {
                $this->error("Mentor is not from 3mtt institute. Current institute: {$mentor->institute}");
                return 1;
            }

            $this->info("Processing 3mtt mentor: {$mentor->firstname} {$mentor->lastname} (ID: {$mentor->id})");
            
            if ($dryRun) {
                $capacityCheck = $mentorManager->checkMentorCapacity($mentor);
                $this->info("Current mentees: {$capacityCheck['current_mentees']}/{$capacityCheck['max_mentees']}");
                $this->info("Can accept more: " . ($capacityCheck['can_accept_more'] ? 'Yes' : 'No'));
                return 0;
            }

            $result = $mentorManager->assignMenteesToMentor($mentor);
            $this->info("Result: {$result['message']}");
            $this->info("Total mentees: {$result['total_mentees']}");
            
            Log::info('Mentee assignment completed for specific 3mtt mentor', [
                'mentor_id' => $mentor->id,
                'result' => $result
            ]);
            
        } else {
            // Run automated assignment for all eligible 3mtt mentors
            $this->info('Running automated mentee assignment for all eligible 3mtt mentors...');
            
            if ($dryRun) {
                $mentorsNeedingAssignments = $mentorManager->getMentorsNeedingAssignments();
                $this->info("3mtt mentors needing assignments: {$mentorsNeedingAssignments['total_mentors_needing_assignments']}");
                
                foreach ($mentorsNeedingAssignments['mentors_needing_assignments'] as $mentorData) {
                    $mentor = $mentorData['mentor'];
                    $capacity = $mentorData['capacity'];
                    $this->info("- {$mentor->firstname} {$mentor->lastname} (ID: {$mentor->id}): {$capacity['current_mentees']}/{$capacity['max_mentees']} mentees");
                }
                return 0;
            }

            $result = $mentorManager->runAutomatedMenteeAssignment();
            $this->info("Automated assignment completed for 3mtt institute!");
            $this->info("Total new assignments: {$result['total_new_assignments']}");
            
            if (!empty($result['results'])) {
                $this->info("Individual results:");
                foreach ($result['results'] as $mentorResult) {
                    $this->info("- {$mentorResult['mentor_name']}: {$mentorResult['assignment_result']['assigned']} new mentees assigned");
                }
            }
            
            Log::info('Automated mentee assignment completed for 3mtt institute', [
                'total_new_assignments' => $result['total_new_assignments'],
                'results' => $result['results']
            ]);
        }

        return 0;
    }
} 