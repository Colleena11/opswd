<?php

namespace App\Http\Controllers;

use App\Models\AssistanceType;
use Illuminate\Http\Request;

class AssistanceTypeController extends Controller
{
    public function index()
    {
        return AssistanceType::all();
    }

    public function store(Request $request)
    {
        $type = AssistanceType::create($request->all());
        return response()->json($type, 201);
    }

    public function show(AssistanceType $assistanceType)
    {
        return $assistanceType;
    }

    public function update(Request $request, AssistanceType $assistanceType)
    {
        $assistanceType->update($request->all());
        return response()->json($assistanceType, 200);
    }

    public function destroy(AssistanceType $assistanceType)
    {
        $assistanceType->delete();
        return response()->json(null, 204);
    }
}