<?php

namespace App\Http\Controllers;

use App\Models\CheckClaimsPayment;
use Illuminate\Http\Request;

class CheckClaimsPaymentController extends Controller
{
    public function index()
    {
        return CheckClaimsPayment::all();
    }

    public function store(Request $request)
    {
        $payment = CheckClaimsPayment::create($request->all());
        return response()->json($payment, 201);
    }

    public function show(CheckClaimsPayment $checkClaimsPayment)
    {
        return $checkClaimsPayment;
    }

    public function update(Request $request, CheckClaimsPayment $checkClaimsPayment)
    {
        $checkClaimsPayment->update($request->all());
        return response()->json($checkClaimsPayment, 200);
    }

    public function destroy(CheckClaimsPayment $checkClaimsPayment)
    {
        $checkClaimsPayment->delete();
        return response()->json(null, 204);
    }
}