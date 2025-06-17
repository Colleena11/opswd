<?php

namespace App\Http\Controllers;

use App\Models\CashClaimsPayment;
use Illuminate\Http\Request;

class CashClaimsPaymentController extends Controller
{
    public function index()
    {
        return CashClaimsPayment::all();
    }

    public function store(Request $request)
    {
        $payment = CashClaimsPayment::create($request->all());
        return response()->json($payment, 201);
    }

    public function show(CashClaimsPayment $cashClaimsPayment)
    {
        return $cashClaimsPayment;
    }

    public function update(Request $request, CashClaimsPayment $cashClaimsPayment)
    {
        $cashClaimsPayment->update($request->all());
        return response()->json($cashClaimsPayment, 200);
    }

    public function destroy(CashClaimsPayment $cashClaimsPayment)
    {
        $cashClaimsPayment->delete();
        return response()->json(null, 204);
    }
}