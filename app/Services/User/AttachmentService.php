<?php

namespace App\Services\User;

use App\Models\Attachment;
use App\Services\Query\FilteringService;

class AttachmentService
{
    public function index($inputs)
    {
        $filter = new FilteringService();
        $attachments = Attachment::query();
        $filter->filterColumns($attachments, $inputs);
        $data['attachments'] = $attachments->latest()->paginate();
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function view(Attachment $attachment)
    {
        $data['attachment'] = $attachment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function store( $input)
    { 
        $attachment = Attachment::create($input);
        

        $data['message'] = "Attachment Created";
        $data['attachment'] = $attachment;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function update(Attachment $attachment, $input)
    {
        $attachment->fill($input);
        if ($attachment->isDirty()) {
            $attachment->save();
        }
        $data['message'] = "Attachment updated";
        $data['attachment'] = $attachment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function delete(Attachment $attachment)
    {
        
        $attachment->delete();
        $data['message'] = "Deleted Successfully";
        $data['attachment'] = $attachment;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }
}
