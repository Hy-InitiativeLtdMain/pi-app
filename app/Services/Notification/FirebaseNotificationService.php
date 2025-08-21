<?php

namespace App\Services\Notification;

use App\Models\Booking;
use App\Models\Mentor;
use App\Models\Mentee;
use App\Models\User;
use App\Services\Media\FirebaseService;
use Illuminate\Support\Facades\Log;

class FirebaseNotificationService
{
    protected FirebaseService $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    /**
     * Send booking notification to mentor
     */
    public function sendBookingNotificationToMentor(Booking $booking, string $institute): void
    {
        try {
            $mentor = $booking->mentor;
            $mentee = $booking->mentee;
            
            if (!$mentor->user || !$mentor->user->user_uuid) {
                Log::warning('Mentor user_uuid not found for Firebase notification', [
                    'mentor_id' => $mentor->id,
                    'booking_id' => $booking->id
                ]);
                return;
            }

            $title = "New Pending Booking";
            $body = "A mentee {$mentee->name} has created a new booking for {$booking->date} at {$booking->time}. Please review and respond.";

            $this->firebaseService->storeNotification(
                $mentor->user->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'booking_created'
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase booking notification sent to mentor', [
                'mentor_id' => $mentor->id,
                'mentor_uuid' => $mentor->user->user_uuid,
                'booking_id' => $booking->id,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase booking notification to mentor', [
                'booking_id' => $booking->id,
                'mentor_id' => $booking->mentor_id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send booking approval/decline notification to mentee
     */
    public function sendBookingApprovalNotificationToMentee(Booking $booking, string $institute): void
    {
        try {
            $mentee = $booking->mentee;
            $mentor = $booking->mentor;
            
            if (!$mentee->user || !$mentee->user->user_uuid) {
                Log::warning('Mentee user_uuid not found for Firebase notification', [
                    'mentee_id' => $mentee->id,
                    'booking_id' => $booking->id
                ]);
                return;
            }

            $status = $booking->status;
            $statusMessage = $status === 'Approved' ? 'approved' : 'declined';
            
            $title = "Booking " . ucfirst($statusMessage);
            $body = "Your booking with {$mentor->firstname} {$mentor->lastname} for {$booking->date} at {$booking->time} has been {$statusMessage}.";

            $this->firebaseService->storeNotification(
                $mentee->user->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'booking_' . strtolower($statusMessage)
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase booking approval notification sent to mentee', [
                'mentee_id' => $mentee->id,
                'mentee_uuid' => $mentee->user->user_uuid,
                'booking_id' => $booking->id,
                'status' => $status,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase booking approval notification to mentee', [
                'booking_id' => $booking->id,
                'mentee_id' => $booking->mentee_id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send booking reminder notification
     */
    public function sendBookingReminderNotification(Booking $booking, User $user, string $institute): void
    {
        try {
            if (!$user->user_uuid) {
                Log::warning('User user_uuid not found for Firebase reminder notification', [
                    'user_id' => $user->id,
                    'booking_id' => $booking->id
                ]);
                return;
            }

            $title = "Mentorship Session Reminder";
            $body = "This is a reminder for your upcoming Mentorship Session at {$booking->time} on {$booking->date}.";

            $this->firebaseService->storeNotification(
                $user->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'booking_reminder'
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase booking reminder notification sent', [
                'user_id' => $user->id,
                'user_uuid' => $user->user_uuid,
                'booking_id' => $booking->id,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase booking reminder notification', [
                'booking_id' => $booking->id,
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send mentor approval notification
     */
    public function sendMentorApprovalNotification(Mentor $mentor, string $institute, string $status): void
    {
        try {
            if (!$mentor->user || !$mentor->user->user_uuid) {
                Log::warning('Mentor user_uuid not found for Firebase approval notification', [
                    'mentor_id' => $mentor->id
                ]);
                return;
            }

            $statusMessage = $status === 'approved' ? 'approved' : 'declined';
            
            $title = "Mentor Application " . ucfirst($statusMessage);
            $body = "Your mentor application has been {$statusMessage}. " . 
                   ($status === 'approved' ? 'You can now start accepting mentee bookings.' : 'Please contact support for more information.');

            $this->firebaseService->storeNotification(
                $mentor->user->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'mentor_application_' . strtolower($statusMessage)
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase mentor approval notification sent', [
                'mentor_id' => $mentor->id,
                'mentor_uuid' => $mentor->user->user_uuid,
                'status' => $status,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase mentor approval notification', [
                'mentor_id' => $mentor->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send mentee assignment notification
     */
    public function sendMenteeAssignmentNotification(Mentor $mentor, int $assignedCount): void
    {
        try {
            if (!$mentor->user || !$mentor->user->user_uuid) {
                Log::warning('Mentor user_uuid not found for Firebase assignment notification', [
                    'mentor_id' => $mentor->id
                ]);
                return;
            }

            $title = "New Mentees Assigned";
            $body = "{$assignedCount} new mentees have been assigned to you. Check your dashboard to view and manage your mentees.";

            $this->firebaseService->storeNotification(
                $mentor->user->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'mentee_assignment'
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase mentee assignment notification sent', [
                'mentor_id' => $mentor->id,
                'mentor_uuid' => $mentor->user->user_uuid,
                'assigned_count' => $assignedCount
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase mentee assignment notification', [
                'mentor_id' => $mentor->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send session cancellation notification
     */
    public function sendSessionCancellationNotification(Booking $booking, string $cancelledBy, string $institute): void
    {
        try {
            $mentor = $booking->mentor;
            $mentee = $booking->mentee;
            
            // Notify mentor
            if ($mentor->user && $mentor->user->user_uuid) {
                $title = "Session Cancelled";
                $body = "Your mentorship session with {$mentee->name} on {$booking->date} at {$booking->time} has been cancelled by {$cancelledBy}.";

                $this->firebaseService->storeNotification(
                    $mentor->user->user_uuid,
                    $title,
<<<<<<< HEAD
                    $body,
                    'session_cancelled'
=======
                    $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
                );
            }

            // Notify mentee
            if ($mentee->user && $mentee->user->user_uuid) {
                $title = "Session Cancelled";
                $body = "Your mentorship session with {$mentor->firstname} {$mentor->lastname} on {$booking->date} at {$booking->time} has been cancelled by {$cancelledBy}.";

                $this->firebaseService->storeNotification(
                    $mentee->user->user_uuid,
                    $title,
<<<<<<< HEAD
                    $body,
                    'session_cancelled'
=======
                    $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
                );
            }

            Log::info('Firebase session cancellation notifications sent', [
                'booking_id' => $booking->id,
                'cancelled_by' => $cancelledBy,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase session cancellation notifications', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send session rescheduled notification
     */
    public function sendSessionRescheduledNotification(Booking $booking, string $rescheduledBy, string $institute): void
    {
        try {
            $mentor = $booking->mentor;
            $mentee = $booking->mentee;
            
            // Notify mentor
            if ($mentor->user && $mentor->user->user_uuid) {
                $title = "Session Rescheduled";
                $body = "Your mentorship session with {$mentee->name} has been rescheduled to {$booking->date} at {$booking->time} by {$rescheduledBy}.";

                $this->firebaseService->storeNotification(
                    $mentor->user->user_uuid,
                    $title,
<<<<<<< HEAD
                    $body,
                    'session_rescheduled'
=======
                    $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
                );
            }

            // Notify mentee
            if ($mentee->user && $mentee->user->user_uuid) {
                $title = "Session Rescheduled";
                $body = "Your mentorship session with {$mentor->firstname} {$mentor->lastname} has been rescheduled to {$booking->date} at {$booking->time} by {$rescheduledBy}.";

                $this->firebaseService->storeNotification(
                    $mentee->user->user_uuid,
                    $title,
<<<<<<< HEAD
                    $body,
                    'session_rescheduled'
=======
                    $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
                );
            }

            Log::info('Firebase session rescheduled notifications sent', [
                'booking_id' => $booking->id,
                'rescheduled_by' => $rescheduledBy,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase session rescheduled notifications', [
                'booking_id' => $booking->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Send review notification
     */
    public function sendReviewNotification(User $reviewedUser, string $reviewerName, string $institute): void
    {
        try {
            if (!$reviewedUser->user_uuid) {
                Log::warning('Reviewed user user_uuid not found for Firebase review notification', [
                    'user_id' => $reviewedUser->id
                ]);
                return;
            }

            $title = "New Review Received";
            $body = "You have received a new review from {$reviewerName}. Check your profile to view the feedback.";

            $this->firebaseService->storeNotification(
                $reviewedUser->user_uuid,
                $title,
<<<<<<< HEAD
                $body,
                'review_submitted'
=======
                $body
>>>>>>> 03568da4e7399e1049ec7daa40d35603a7baa4c5
            );

            Log::info('Firebase review notification sent', [
                'reviewed_user_id' => $reviewedUser->id,
                'reviewed_user_uuid' => $reviewedUser->user_uuid,
                'reviewer_name' => $reviewerName,
                'institute' => $institute
            ]);

        } catch (\Exception $e) {
            Log::error('Failed to send Firebase review notification', [
                'reviewed_user_id' => $reviewedUser->id,
                'error' => $e->getMessage()
            ]);
        }
    }
} 