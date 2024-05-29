<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CategoryRequest;
use App\Models\Category;
use App\Services\User\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryManager extends Controller
{

    private $categoryService;

    function __construct(CategoryService $categoryService )
    {
        $this->categoryService = $categoryService;
        $this->middleware('feature:course');
    }

    public function index(Request $request)
    {
        $_data = $this->categoryService->index();
        return response($_data['data'], $_data['code']);
    }


    public function view(Category $category)
    {
        $_data = $this->categoryService->view($category);
        return response($_data['data'], $_data['code']);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate(CategoryRequest::$_updateRules);
        $_data = $this->categoryService->update($category, $validated);
        return response($_data['data'], $_data['code']);
    }

    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();

        $validated['user_id'] = $request->user()->id;
        $_data = $this->categoryService->store($validated);
        return response($_data['data'], $_data['code']);
    }

    public function delete(Category $category)
    {
        $_data = $this->categoryService->delete($category);
        return response($_data['data'], $_data['code']);
    }

    public function bulkCreate(Request $request)
    {
        $userId = auth()->user()->id;
        $categories = $request->input('categories');

        $created = 0;
        $errors = [];

        foreach ($categories as $categoryData) {
            $categoryData['user_id'] = $userId; // Add the user ID to each category
            $validator = Validator::make($categoryData, [
                'title' => 'required|string',
            ]);

            if ($validator->fails()) {
                $errors[] = [
                    'message' => 'Validation error for category',
                    'errors' => $validator->errors(),
                ];
            } else {
                Category::create($categoryData);
                $created++;
            }
        }

        return response()->json(['created' => $created, 'errors' => $errors]);
    }
}
