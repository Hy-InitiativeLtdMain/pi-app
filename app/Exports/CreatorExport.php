<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CreatorExport implements FromCollection, WithHeadings
{
    protected $creators;

    public function __construct($creators)
    {
        $this->creators = $creators;
    }

    public function collection()
    {
        // Select only the desired fields
        return $this->creators->map(function ($creator) {
            return [
                'First Name'   => $creator->first_name,
                'Last Name'    => $creator->last_name,
                'Email'        => $creator->email,
                'Phone Number' => $creator->phone,
                'Gender'       => $creator->gender,
                'Location'     => $creator->location,
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
