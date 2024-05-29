<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LearnerExport implements FromCollection, WithHeadings
{
    protected $learners;

    public function __construct($learners)
    {
        $this->learners = $learners;
    }

    public function collection()
    {
        // Select only the desired fields
        return $this->learners->map(function ($learner) {
            return [
                'First Name'   => $learner->first_name,
                'Last Name'    => $learner->last_name,
                'Email'        => $learner->email,
                'Phone Number' => $learner->phone,
                'Gender'       => $learner->gender,
                'Location'     => $learner->location,
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
            'Gender',
            'Location',
        ];
    }
}
