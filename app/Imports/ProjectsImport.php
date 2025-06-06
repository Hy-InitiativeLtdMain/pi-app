<?php

namespace App\Imports;

use App\Models\Project;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ProjectsImport implements ToCollection
{
    protected $categoryMap;

    public function __construct(array $categoryMap)
    {
        $this->categoryMap = $categoryMap;
    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $sheetName = request()->get('sheet'); // Optional: if you’re passing sheet context

            if (!isset($this->categoryMap[$sheetName])) continue;
            if (empty($row[0])) continue; // Assuming column A is Project Title

            Project::create([
                'name' => $row[0],
                'objective' => $row[1] ?? '',
                'dataset_link' => $row[2] ?? '',
                'category_id' => $this->categoryMap[$sheetName]
            ]);
        }
    }
}
