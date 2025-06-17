<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    public function index()
    {
        return Claim::all();
    }

    public function store(Request $request)
    {
        $claim = Claim::create($request->all());
        return response()->json($claim, 201);
    }

    public function show(Claim $claim)
    {
        return $claim;
    }

    public function update(Request $request, Claim $claim)
    {
        $claim->update($request->all());
        return response()->json($claim, 200);
    }

    public function destroy(Claim $claim)
    {
        $claim->delete();
        return response()->json(null, 204);
    }
}