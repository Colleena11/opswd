<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return Login::all();
    }

    public function store(Request $request)
    {
        $login = Login::create($request->all());
        return response()->json($login, 201);
    }

    public function show(Login $login)
    {
        return $login;
    }

    public function update(Request $request, Login $login)
    {
        $login->update($request->all());
        return response()->json($login, 200);
    }

    public function destroy(Login $login)
    {
        $login->delete();
        return response()->json(null, 204);
    }
}