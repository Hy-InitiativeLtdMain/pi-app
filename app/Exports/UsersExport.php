<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements WithHeadings, FromCollection
{
    protected $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function collection()
    {
        // Select only the desired fields
        return $this->users->map(function ($user) {
            return [
                'First Name'   => $user->first_name,
                'Last Name'    => $user->last_name,
                'Email'        => $user->email,
                'Phone Number' => $user->phone,
                'Gender'       => $user->gender,
                'Location'     => $user->location,
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
