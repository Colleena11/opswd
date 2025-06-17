<?php

namespace App\Http\Controllers;

use App\Models\Payee;
use Illuminate\Http\Request;

class PayeeController extends Controller
{
    public function index()
    {
        return Payee::all();
    }

    public function store(Request $request)
    {
        $payee = Payee::create($request->all());
        return response()->json($payee, 201);
    }

    public function show(Payee $payee)
    {
        return $payee;
    }

    public function update(Request $request, Payee $payee)
    {
        $payee->update($request->all());
        return response()->json($payee, 200);
    }

    public function destroy(Payee $payee)
    {
        $payee->delete();
        return response()->json(null, 204);
    }
}