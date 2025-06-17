<?php

namespace App\Http\Controllers;

use App\Models\ClientAssistance;
use Illuminate\Http\Request;

class ClientAssistanceController extends Controller
{
    public function index()
    {
        return ClientAssistance::all();
    }

    public function store(Request $request)
    {
        $assistance = ClientAssistance::create($request->all());
        return response()->json($assistance, 201);
    }

    public function show(ClientAssistance $clientAssistance)
    {
        return $clientAssistance;
    }

    public function update(Request $request, ClientAssistance $clientAssistance)
    {
        $clientAssistance->update($request->all());
        return response()->json($clientAssistance, 200);
    }

    public function destroy(ClientAssistance $clientAssistance)
    {
        $clientAssistance->delete();
        return response()->json(null, 204);
    }
}