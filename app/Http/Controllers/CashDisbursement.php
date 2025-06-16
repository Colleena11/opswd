<?php

namespace App\Http\Controllers;

use App\Models\CashDisbursement;
use Illuminate\Http\Request;

class CashDisbursementController extends Controller
{
    public function index()
    {
        return CashDisbursement::all();
    }

    public function store(Request $request)
    {
        return CashDisbursement::create($request->all());
    }

    public function show($id)
    {
        return CashDisbursement::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $disbursement = CashDisbursement::findOrFail($id);
        $disbursement->update($request->all());
        return $disbursement;
    }

    public function destroy($id)
    {
        CashDisbursement::destroy($id);
        return response()->noContent();
    }
}