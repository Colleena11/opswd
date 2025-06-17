<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function index()
    {
        return Municipality::all();
    }

    public function store(Request $request)
    {
        return Municipality::create($request->all());
    }

    public function show($id)
    {
        return Municipality::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $municipality = Municipality::findOrFail($id);
        $municipality->update($request->all());
        return $municipality;
    }

    public function destroy($id)
    {
        Municipality::destroy($id);
        return response()->noContent();
    }
}