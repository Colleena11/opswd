<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index()
    {
        return Requirement::all();
    }

    public function store(Request $request)
    {
        $requirement = Requirement::create($request->all());
        return response()->json($requirement, 201);
    }

    public function show(Requirement $requirement)
    {
        return $requirement;
    }

    public function update(Request $request, Requirement $requirement)
    {
        $requirement->update($request->all());
        return response()->json($requirement, 200);
    }

    public function destroy(Requirement $requirement)
    {
        $requirement->delete();
        return response()->json(null, 204);
    }
}