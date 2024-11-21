<?php
namespace App\Traits;

use DateInterval;
use DateTime;
use Exception;
use InvalidArgumentException;
use RuntimeException;

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
                'mentor_id' => $requestData['mentor_id'],
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
            'mentor_id' => $requestData['mentor_id'],
        ];
    }

    // Helper function to calculate end time
    private function parseTime($time)
    {
        $formats = ['H:i:s', 'H:i', 'h:i A'];

        foreach ($formats as $format) {
            $parsedTime = DateTime::createFromFormat($format, $time);
            if ($parsedTime) {
                // dd($parsedTime);
                return $parsedTime;
                break;
            }
        }
        // dd($parsedTime);
        // If parsing fails, return null
        return null;
    }

    private function calculateEndTime($startTime, $duration)
    {
        // Parse the start time
        $parsedStartTime = $this->parseTime($startTime);
        // dd("Pasd: ", $parsedStartTime);
        if (!($parsedStartTime instanceof DateTime)) {
            dd("ParsedStartTime is not a DateTime object", $parsedStartTime);
            throw new InvalidArgumentException(
                "Invalid start time format: " . (is_string($startTime) ? $startTime : json_encode($startTime))
            );
        }

        // Parse the duration
        preg_match('/(\d+)\s*hour/', $duration, $hourMatches);
        preg_match('/(\d+)\s*minute/', $duration, $minuteMatches);

        $hours = !empty($hourMatches) ? intval($hourMatches[1]) : 0;
        $minutes = !empty($minuteMatches) ? intval($minuteMatches[1]) : 0;

        // Ensure $parsedStartTime is safely cloned
        if (!$parsedStartTime instanceof DateTime) {
            throw new RuntimeException("Start time is not a valid DateTime object after parsing.");
        }

        // Calculate the end time
        try {
            $endTime = clone $parsedStartTime; // Safely clone the DateTime object
            $endTime->add(new DateInterval("PT{$hours}H{$minutes}M"));
        } catch (Exception $e) {
            throw new RuntimeException("Error calculating end time: " . $e->getMessage());
        }

        // Format the end time as H:i
        return $endTime->format('H:i');
    }

    private function calculateEndTimeWithSeconds($startTime, $duration)
    {
        // dd($startTime, $duration);
        // get starttime format

        if (DateTime::createFromFormat('H:i:s', $startTime)) {
            $startTime = DateTime::createFromFormat('H:i:s', $startTime);
        } else if (DateTime::createFromFormat('H:i', $startTime)) {
            $startTime = DateTime::createFromFormat('H:i', $startTime);
        } else {
            $startTime = DateTime::createFromFormat('h:i A', $startTime);
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
