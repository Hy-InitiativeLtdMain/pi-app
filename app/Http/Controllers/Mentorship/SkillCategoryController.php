<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SkillCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $categories = SkillCategory::with('skills')->get();
        
        return response()->json([
            'success' => true,
            'data' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:skill_categories',
            'description' => 'nullable|string',
        ]);

        $category = SkillCategory::create($validated);
        
        return response()->json([
            'success' => true,
            'message' => 'Skill category created successfully',
            'data' => $category,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillCategory $category): JsonResponse
    {
        $category->load('skills');
        
        return response()->json([
            'success' => true,
            'data' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillCategory $category): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255|unique:skill_categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $category->update($validated);
        
        return response()->json([
            'success' => true,
            'message' => 'Skill category updated successfully',
            'data' => $category,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillCategory $category): JsonResponse
    {
        $category->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Skill category deleted successfully',
        ]);
    }
}