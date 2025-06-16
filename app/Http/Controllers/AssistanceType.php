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
        return AssistanceType::create($request->all());
    }

    public function show($id)
    {
        return AssistanceType::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $type = AssistanceType::findOrFail($id);
        $type->update($request->all());
        return $type;
    }

    public function destroy($id)
    {
        AssistanceType::destroy($id);
        return response()->noContent();
    }
}