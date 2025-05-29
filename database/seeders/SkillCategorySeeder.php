<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Behavioural Competency',
                'description' => 'Skills related to personal attributes and interpersonal abilities',
            ],
            [
                'name' => 'Technical Competency',
                'description' => 'Skills related to technical knowledge and professional expertise',
            ],
        ];

        foreach ($categories as $category) {
            SkillCategory::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}