<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            'Programming languages',
            'Common operating systems',
            'Software proficiency',
            'Technical writing',
            'Project management',
            'Data analysis',
            'Software programming',
            'Budget planning',
            'Risk management',
            'Project planning',
            'Task management',
            'Benchmarking',
            'Engineering',
            'Fabrication',
            'Operations',
            'Performance Review',
            'Quality Assurance',
            'Quality Control',
            'Scheduling',
            'Task Delegation',
            'SCRUM methodology',
            'Agile methodology',
            'Product roadmaps',
            'User experience design',
            'Programming skills',
            'Product lifecycle management',
            'QA testing',
            'Requirements gathering',
            'Coding',
            'Debugging',
            'Implementation',
            'Testing',
            'Design',
            'Configuration',
            'Applications',
            'IOS/Android',
            'Languages',
            'Security',
            'Algorithms',
            'Modelling',
            'Documentation',
            'Adobe creative apps',
            'HTML',
            'Interactive media',
            'Wireframing',
            'UX research',
            'Prototyping',
            'Color theory',
            'Responsive design',
            'Photoshop',
            'Sketch',
            'User modeling',
            'Search engine optimization (SEO)',
            'Digital media',
            'Social media platforms (Twitter, Facebook, Instagram)',
            'Automated marketing software',
            'Content management systems (CMS)',
            'Copywriting',
            'Content creation',
            'Google Analytics',
            'Web Analytics',
            'Marketing analytics tools',
            'Medical billing',
            'Medical coding',
            'Electronic medical record software',
            'Sonography',
            'CAD software',
            'Logistics management',
            'Bookkeeping software',
            'Writing',
            'Marketing',
            'Customer Service',
            'Information security',
            'Business intelligence',
            'Big data analysis',
            'Structural Analysis',
            'Artificial Intelligence (AI)',
            'Mechanical Maintenance',
            'Manufacturing',
            'Inventory Management',
            'Numeracy',
            'Information Management',
            'Hardware Verification Tools and Techniques',
            'Hardware Description Language (HDL)',
            'Microsoft Office Certifications',
            'Video Creation',
            'Customer Relationship Management (CRM)',
            'Productivity Software',
            'Cloud/SaaS Services',
            'Database Management',
            'Telecommunications',
            'Human Resources Software',
            'Accounting Software',
            'Enterprise Resource Planning (ERP) Software',
            'Database Software',
            'Query Software',
            'Blueprint Design',
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill
            ]);
        }
    }
}
