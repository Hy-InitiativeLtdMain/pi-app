<?php

namespace App\Services\User;

use App\Models\Event;
use App\Services\Media\CloudinaryService;
use App\Services\Query\FilteringService;

class EventService
{
    public function index($inputs){
        // dd($inputs);
        $filter = new FilteringService();
        $events = Event::query();
        $filter->filterColumns($events, $inputs);
        $data['events'] = $events->latest()->paginate();
        return [
            'data'=> $data,
            'code'=> 200,
        ];
    }

    public function show(Event $event){
        $data['event'] = $event->fresh(['user']);
        return [
            'data'=> $data,
            'code'=> 200,
        ];
    }

    public function store($inputs){
        // dd($inputs->all());
        $input=$inputs->all();
        if (isset($inputs['image']) && $inputs['image'] != null) {
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($inputs['image'], "event-images");
            // dd($resp[0]);
            $input['image'] = $resp[0];
            $input['image_id'] = $resp[1];
        }
        if (isset($inputs['file']) && $inputs['file'] != null){
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->storeFiles($inputs['file'], "event-files");
            $input['file'] = $resp[0];
            $input['file_id'] = $resp[1];
            $input['file_type'] = $inputs['file']->getClientOriginalExtension();
        }
        $input['user_id'] = auth()->user()->id;
        $input['institute'] = auth()->user()->institute_slug;
        // dd($input);
        $event = Event::create($input);
        $data['message'] = "Event created successfully";
        $data['event'] = $event->fresh(['user']);
        return [
            'data'=> $data,
            'code'=> 201,
        ];
    }

    public function update(Event $event, $inputs){
        // dd($inputs);

        if (isset($inputs['image']) && $inputs['image'] != null) {
            $cloudinary = new CloudinaryService();
            if ($event->image_id != null) {
                $cloudinary->delete($event->image_id);
            }

            $resp = $cloudinary->store($inputs['image'], "event-images");
            $inputs['image'] = $resp[0];
            $inputs['image_id'] = $resp[1];
        }
        if (isset($inputs['file']) && $inputs['file'] != null){
            $cloudinary = new CloudinaryService();
            if ($event->file_id != null) {
                $cloudinary->delete($event->file_id);
            }
            $inputs['file_type'] = $inputs['file']->getClientOriginalExtension();
            $resp = $cloudinary->storeFiles($inputs['file'], "event-files");
            $inputs['file'] = $resp[0];
            $inputs['file_id'] = $resp[1];
        }
        // dd($inputs);
        $event->fill($inputs);
        if ($event->isDirty()) {
            $event->save();
        }
        $data['message'] = "Event updated successfully";
        $data['event'] = $event->fresh(['user']);
        return [
            'data'=> $data,
            'code'=> 200,
        ];
    }

    public function destroy(Event $event){
        $event->delete();

        if($event->file_id != null){
            $cloudinary = new CloudinaryService();
            $cloudinary->delete($event->file_id);
        }
        if($event->image_id != null){
            $cloudinary = new CloudinaryService();
            $cloudinary->delete($event->image_id);
        }
        $data['message'] = "Event deleted successfully";
        $data['event'] = $event;
        return [
            'data'=> $data,
            'code'=> 200,
        ];
    }
}
