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
        $disbursement = CashDisbursement::create($request->all());
        return response()->json($disbursement, 201);
    }

    public function show(CashDisbursement $cashDisbursement)
    {
        return $cashDisbursement;
    }

    public function update(Request $request, CashDisbursement $cashDisbursement)
    {
        $cashDisbursement->update($request->all());
        return response()->json($cashDisbursement, 200);
    }

    public function destroy(CashDisbursement $cashDisbursement)
    {
        $cashDisbursement->delete();
        return response()->json(null, 204);
    }
}