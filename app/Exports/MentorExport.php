<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MentorExport implements FromCollection, WithHeadings
{
    protected $mentors;

    public function __construct($mentors)
    {
        $this->mentors = $mentors;
    }

    public function collection()
    {
        // Select only the desired fields
        return $this->mentors->map(function ($mentor) {
            return [
                'First Name'  => $mentor->firstname,
                'Last Name' => $mentor->lastname ,
                'Email' => $mentor-> email,
                'Phone Number' => $mentor->phone  ,
                'Company' => $mentor->company  ,
                'Job Title' => $mentor->job_title  ,
                'Bio' => $mentor->bio  ,
                'Status' => $mentor->status  ,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Phone Number',
            'Company',
            'Job Title',
            'Bio',
            'Status',
        ];
    }
}
