<?php

namespace App\Services\User;

use App\Models\Assignment;
use App\Models\AssignmentUser;
use App\Services\Query\FilteringService;

class AssignmentService
{
    public function index($inputs)
    {
        $filter = new FilteringService();
        $assignments = Assignment::query();
        $filter->filterColumns($assignments, $inputs);
        $data['assignments'] = $assignments->latest()->paginate();
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function view(Assignment $assignment)
    {
        $data['assignment'] = $assignment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function store( $input)
    { 
        $assignment = Assignment::create($input);
        

        $data['message'] = "Assignment Created";
        $data['assignment'] = $assignment;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function update(Assignment $assignment, $input)
    {
        $assignment->fill($input);
        if ($assignment->isDirty()) {
            $assignment->save();
        }
        $data['message'] = "Assignment updated";
        $data['assignment'] = $assignment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    
    public function submit($input)
    { 
        
        $assignmentUser = AssignmentUser::create($input);
        

        $data['message'] = "User Assignment Created";
        $data['assignmentUser'] = $assignmentUser;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function delete(Assignment $assignment)
    {
        
        $assignment->delete();
        $data['message'] = "Deleted Successfully";
        $data['assignment'] = $assignment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }
}
