<?php

namespace App\Services\User;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonUser;
use App\Models\User;
use App\Services\Media\CloudinaryService;

class LessonService
{
    public function index(Course $course)
    {
        $data['lessons'] = $course->lessons()->paginate();
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function view(Lesson $lesson)
    {
        $data['lesson'] = $lesson->fresh(['course']);
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function store(Course $course, $input)
    {
        
        if($input['cover_file'] != null){
            $cloudinary = new CloudinaryService();
            $resp = $cloudinary->store($input['cover_file'], "lesson-images");
            $input['cover_url'] = $resp[0];
            $input['cover_url_id'] = $resp[1];
        }

        $lesson = $course->lessons()->create($input);
        

        $data['message'] = "Lesson Created";
        $data['lesson'] = $lesson;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function update(Lesson $lesson, $input)
    {
        if(isset($input['cover_file'] )){
            $cloudinary = new CloudinaryService();
            if($lesson->cover_url_id != null){
                $cloudinary->delete($lesson->cover_url_id);
            }
            
            $resp = $cloudinary->store($input['cover_file'], "lesson-images");
            $input['cover_url'] = $resp[0];
            $input['cover_url_id'] = $resp[1];
        }
        $lesson->fill($input);
        if ($lesson->isDirty()) {
            $lesson->save();
        }
        $data['message'] = "Lesson updated";
        $data['lesson'] = $lesson;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function delete(Lesson $lesson)
    {
        
        $lesson->delete();

        if($lesson->cover_url_id != null){
            $cloudinary = new CloudinaryService();
            $cloudinary->delete($lesson->cover_url_id);
        }

        $data['message'] = "Deleted Successfully";
        $data['lesson'] = $lesson;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function updateLessonSeen(Lesson $lesson, User $user, bool $seen = false)
    {
        $lu = LessonUser::updateOrCreate([
            'lesson_id'  => $lesson->id,
            'user_id'  => $user->id,
        ], ['seen'=>$seen]);                
        $data['message'] = "User Lesson Status Updated";
        $data['lu'] = $lu;
        return [
            'data' => $data, 
            'code' => 202
        ];
    }
}
