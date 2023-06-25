<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::create(
            [
                "first_name" => "root user",
                "last_name" => "root user",
                "email" => "root@mail.com",
                "password" => "password",
                "is_admin" => true
            ]
        );
        $adminUser->email_verified_at = Carbon::now();
        $adminUser->save();
    }
}
