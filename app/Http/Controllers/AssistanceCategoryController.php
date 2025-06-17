<?php

namespace App\Http\Controllers;

use App\Models\AssistanceCategory;
use Illuminate\Http\Request;

class AssistanceCategoryController extends Controller
{
    public function index()
    {
        return AssistanceCategory::all();
    }

    public function store(Request $request)
    {
        $category = AssistanceCategory::create($request->all());
        return response()->json($category, 201);
    }

    public function show(AssistanceCategory $assistanceCategory)
    {
        return $assistanceCategory;
    }

    public function update(Request $request, AssistanceCategory $assistanceCategory)
    {
        $assistanceCategory->update($request->all());
        return response()->json($assistanceCategory, 200);
    }

    public function destroy(AssistanceCategory $assistanceCategory)
    {
        $assistanceCategory->delete();
        return response()->json(null, 204);
    }
}