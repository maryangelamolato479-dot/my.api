<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // This validates the data coming from Postman
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'gender'   => 'required',
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully'
        ], 201);
    }
}