<?php

namespace Database\Seeders;

use App\Imports\ProjectsImport;
use App\Imports\ProjectsMultiSheetImport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectCategory;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks and truncate tables
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        ProjectCategory::truncate();
        Project::truncate();
        
        // Reset auto-increment to 1
        DB::statement('ALTER TABLE project_categories AUTO_INCREMENT = 1');
        DB::statement('ALTER TABLE projects AUTO_INCREMENT = 1');
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $categories = [
            'Foundational level',
            'Data Science and Machine Learning',
            'Advanced Analytics with Azure',
            'Geospatial Data Science',
            'Natural Language Processing',
            'Computer Vision'
        ];

        // Create categories
        foreach ($categories as $categoryName) {
            ProjectCategory::firstOrCreate(['name' => $categoryName]);
        }

        // Map Excel sheets to category IDs
        $categoryMap = [
            'Foundational level' => ProjectCategory::where('name', 'Foundational level')->first()->id,
            'Data Science and Machine Learni' => ProjectCategory::where('name', 'Data Science and Machine Learning')->first()->id,
            'Advanced Analytics with Azure (' => ProjectCategory::where('name', 'Advanced Analytics with Azure')->first()->id,
            'Geospatial Data Science' => ProjectCategory::where('name', 'Geospatial Data Science')->first()->id,
            'Natural Language Processing (NL' => ProjectCategory::where('name', 'Natural Language Processing')->first()->id,
            'Computer Vision' => ProjectCategory::where('name', 'Computer Vision')->first()->id
        ];

        $filePath = storage_path('../upload/Projects.xlsx');
        Excel::import(new ProjectsMultiSheetImport($categoryMap), $filePath);
    }
}
