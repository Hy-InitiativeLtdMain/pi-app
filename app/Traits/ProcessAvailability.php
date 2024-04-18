<?php
namespace App\Traits;

use DateTime;
use DateInterval;

trait ProcessAvailability
{
    protected function processAvailability($requestData)
    {
        // Check if the availability field is JSON encoded
        if (is_string($requestData['availability'])) {
            $availabilityData = json_decode($requestData['availability'], true);
        } else {
            $availabilityData = $requestData['availability'];
        }
        $availabilitySlots = [];

        // If 'day' key is not set, treat the availability field as a single availability slot
        if (!isset($availabilityData['day'])) {
            $availabilitySlots[] = [
                'availability' => $requestData['availability'],
                'title' => $requestData['title'],
                'duration' => $requestData['duration'],
                'meeting_link' => $requestData['meeting_link'],
                'description' => $requestData['description'],
                'id' => $requestData['id'],
                'mentor_id' => $requestData['mentor_id']
            ];
        } else {
            // Iterate over each day specified in the availability data
            foreach ($availabilityData['day'] as $index => $day) {
                // Check if time slots are available for the current day
                if (isset($availabilityData['time_slots'])) {
                    // Get the time slots for the current day
                    $timeSlots = $availabilityData['time_slots'];

                    // Generate availability slots for each time slot of the current day
                    foreach ($timeSlots as $timeSlot) {
                        // Add the availability slot for the current day
                        $availabilitySlots[] = $this->generateAvailabilitySlot($day, $timeSlot, $requestData);
                    }
                }
            }
        }

        return $availabilitySlots;
    }

    // Helper function to generate an availability slot
    private function generateAvailabilitySlot($day, $timeSlot, $requestData)
    {
        return [
            'day' => $day,
            'startTime' => $timeSlot,
            'endTime' => $this->calculateEndTime($timeSlot, $requestData['duration']),
            'title' => $requestData['title'],
            'meeting_link' => $requestData['meeting_link'],
            'duration' => $requestData['duration'],
            'about' => $requestData['about'],
            'id' => $requestData['id'],
            'mentor_id' => $requestData['mentor_id']
        ];
    }

    // Helper function to calculate end time
    private function calculateEndTime($startTime, $duration)
    {
        // Convert the start time to a DateTime object
        $startTime = DateTime::createFromFormat('H:i', $startTime);

        // Parse the duration to extract the number of hours and minutes
        preg_match('/(\d+) hour/', $duration, $hourMatches);
        preg_match('/(\d+) minute/', $duration, $minuteMatches);

        $hours = !empty($hourMatches) ? intval($hourMatches[1]) : 0;
        $minutes = !empty($minuteMatches) ? intval($minuteMatches[1]) : 0;

        // Calculate the end time
        $endTime = clone $startTime;
        $endTime->add(new DateInterval("PT{$hours}H{$minutes}M"));

        // Format the end time as H:i
        return $endTime->format('H:i');
    }

    private function calculateEndTimeWithSeconds($startTime, $duration)
    {
        // dd($startTime, $duration);
        // get starttime format

        if(DateTime::createFromFormat('H:i:s', $startTime)){
            $startTime = DateTime::createFromFormat('H:i:s', $startTime);
        } else {
            $startTime = DateTime::createFromFormat('H:i', $startTime);
        }
        // dd($startTime);

        // Convert the start time to a DateTime object

        // Parse the duration to extract the number of hours and minutes
        preg_match('/(\d+) hour/', $duration, $hourMatches);
        preg_match('/(\d+) minute/', $duration, $minuteMatches);

        $hours = !empty($hourMatches) ? intval($hourMatches[1]) : 0;
        $minutes = !empty($minuteMatches) ? intval($minuteMatches[1]) : 0;

        // Calculate the end time
        $endTime = clone $startTime;
        $endTime->add(new DateInterval("PT{$hours}H{$minutes}M"));
        // dd($endTime);
        // Format the end time as H:i
        return $endTime->format("H:i");
    }


}
