<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ProjectsMultiSheetImport implements WithMultipleSheets
{
    protected $categoryMap;

    public function __construct(array $categoryMap)
    {
        $this->categoryMap = $categoryMap;
    }

    public function sheets(): array
    {
        $sheets = [];

        foreach ($this->categoryMap as $sheetName => $categoryId) {
            $sheets[$sheetName] = new ProjectsPerSheetImport($categoryId);
        }

        return $sheets;
    }
}
