<?php

namespace App\Http\Resources\Mentor;

use App\Models\Booking;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MentorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $count = Booking::where('mentor_id', $this->id)->where('status', 'Approved')->count();
        // Some checks
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'bio' => $this->bio,
            'no_of_mentees' => $count,
            'company' => $this->company,
            'job_title' => $this->job_title,
            'experience' => $this->experience,
            'skills' => $this->formatSkillsWithNames(),
            "highest_edu_qualification" => $this->highest_edu_qualification,
            "past_mentorship_exp" => $this->past_mentorship_exp,
            "video_intro" => $this->video_intro,
            'accessability' => $this->accessability,
            'profile_pic' => $this->profile_pic,
            'country' => $this->country,
            'linkedin_profile' => $this->linkedin_profile,
            'portfolio' => $this->portfolio,
            'resume_link' => $this->resume_link,
            'project' => $this->project,
            'availability' => $this->availability->map(function ($avail) {
                if (is_string($avail->availability)) {
                    $availability = json_decode($avail->availability);
                    if ($availability) {
                        return [
                            'id' => $avail->id,
                            'title' => $avail->title,
                            'about' => $avail->about,
                            'duration' => $avail->duration,
                            'meeting_link' => $avail->meeting_link,
                            'days' => isset($availability->day) ? $availability->day : null,
                            'time_slots' => isset($availability->time_slots) ? $availability->time_slots : null,
                        ];
                    }
                }
                // If it's not a string or not valid JSON, return as is
                return [
                    'id' => $avail->id,
                    'title' => $avail->title,
                    'about' => $avail->about,
                    'duration' => $avail->duration,
                    'meeting_link' => $avail->meeting_link,
                    'days' => $avail->availability['day'],
                    'time_slots' => $avail->availability['time_slots'],
                ];
                ;
            }),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }

    protected function formatSkillsWithNames()
    {
        $formattedSkills = [];

        if ($this->skills) {
            $skillsData = json_decode($this->skills, true);
            if (is_array($skillsData) && isset($skillsData['skills'])) {
                foreach ($skillsData['skills'] as $skillData) {
                    if (isset($skillData['skill_id'])) {
                        $skill = Skill::find($skillData['skill_id']);

                        if ($skill) {
                            $formattedSkills[] = [
                                'id' => $skill->id,
                                'name' => $skill->name,
                                'category_id' => $skill->category_id,
                                'level' => $skillData['level'] ?? null,
                            ];
                        }
                    }
                }
            }
        }

        return $formattedSkills;
    }
}
