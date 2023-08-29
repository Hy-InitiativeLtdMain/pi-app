<?php

namespace App\Services\Query;

use App\Models\Transaction;
use Exception;
use Illuminate\Support\Facades\Http;

class FilteringService
{
    public $ignoreField = ['page', 'per_page', 'indexByLastMessage', 'start_date', 'end_date', 'privilege', 'general', 'all'];
    public function filterColumns(&$query, $columns)
    {

        foreach ($columns as $key => $value) {
            if (in_array($key, $this->ignoreField)) {
                continue;
            }
            if (trim($value) == '') {
                continue;
            }
            if (str_contains($value, '_id')) {
                $query->where($key,  $value);
            } else {
                $query->where($key, 'LIKE', '%' . $value . '%');
            }
        }
    }


    public function filterColumnsByValue(&$query, $columns, $search)
    {

        foreach ($columns as  $key => $column) {
            if ($key == 0) {
                $query->where($column, 'LIKE', '%' . $search . '%');
            } else {
                $query->Orwhere($column, 'LIKE', '%' . $search . '%');
            }
        }
    }
}
