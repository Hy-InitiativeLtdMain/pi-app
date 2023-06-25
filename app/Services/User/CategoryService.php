<?php

namespace App\Services\User;

use App\Models\Category;

class CategoryService
{
    public function index()
    {
        $data['categoriess'] = Category::latest()->paginate();
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function view(Category $category)
    {
        $data['category'] = $category;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function store( $input)
    { 
        $category = Category::create($input);
        

        $data['message'] = "Category Created";
        $data['category'] = $category;
        return [
            'data' => $data, 
            'code' => 201
        ];
    }

    public function update(Category $category, $input)
    {
        $category->fill($input);
        if ($category->isDirty()) {
            $category->save();
        }
        $data['message'] = "Category updated";
        $data['category'] = $category;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }

    public function delete(Category $category)
    {
        
        $category->delete();
        $data['message'] = "Deleted Successfully";
        $data['category'] = $category;
        return [
            'data' => $data, 
            'code' => 200
        ];
    }
}
