<?php

namespace App\Imports;

use App\Models\Project;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProjectsPerSheetImport implements ToCollection
{
    protected $categoryId;

    public function __construct($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            if (empty($row[0])) continue;

            Project::create([
                'name' => $row[1],
                'objective' => $row[2] ?? '',
                'dataset_link' => $row[3] ?? '',
                'category_id' => $this->categoryId
            ]);
        }
    }
}
