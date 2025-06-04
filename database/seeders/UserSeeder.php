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
        $adminUser = User::firstOrCreate(
            ['email' => 'root@mail.com'], // Lookup key only
            [
                'first_name' => 'root user',
                'last_name' => 'root user',
                'password' => bcrypt('password'), // Always hash!
                'is_admin' => true,
            ]
        );

        // Verify email timestamp if newly created or already exists
        $adminUser->email_verified_at = Carbon::now();
        $adminUser->save();
    }
}
