<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        
        $username = $request->input('name');
        $password = $request->input('password');

    
        return response()->json([
            'username' => $username,
            'password' => $password,
        ]);
    }
}
