<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class MentorSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get category IDs
        $behavioralCategory = SkillCategory::where('name', 'Behavioural Competency')->first();
        $technicalCategory = SkillCategory::where('name', 'Technical Competency')->first();
        
        if (!$behavioralCategory || !$technicalCategory) {
            $this->command->info('Please run the SkillCategorySeeder first!');
            return;
        }
        
        // Behavioral competency skills
        $behavioralSkills = [
            'Leadership',
            'Adaptability',
            'Clarity in Comunication',
            'Active Listening',
            'Constructive Feedback',
            'Growth Mindset'
        ];
        
        // Technical competency skills
        $technicalSkills = [
            'User-centered design thinking',
            'Product development lifecycle',
            'Wireframing & prototyping tools',
            'Data fluency',
            'Technical Collaboration',
            'AI/DeepTech Product Understanding'
        ];
        
        // Seed behavioral skills
        foreach ($behavioralSkills as $skillName) {
            Skill::updateOrCreate(
                ['name' => $skillName],
                ['category_id' => $behavioralCategory->id]
            );
        }
        
        // Seed technical skills
        foreach ($technicalSkills as $skillName) {
            Skill::updateOrCreate(
                ['name' => $skillName],
                ['category_id' => $technicalCategory->id]
            );
        }
    }
}