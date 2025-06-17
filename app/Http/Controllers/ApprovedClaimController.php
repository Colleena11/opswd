<?php

namespace App\Http\Controllers;

use App\Models\ApprovedClaim;
use Illuminate\Http\Request;

class ApprovedClaimController extends Controller
{
    public function index()
    {
        return ApprovedClaim::all();
    }

    public function store(Request $request)
    {
        return ApprovedClaim::create($request->all());
    }

    public function show($id)
    {
        return ApprovedClaim::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $claim = ApprovedClaim::findOrFail($id);
        $claim->update($request->all());
        return $claim;
    }

    public function destroy($id)
    {
        ApprovedClaim::destroy($id);
        return response()->noContent();
    }
}