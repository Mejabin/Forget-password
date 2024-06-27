<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        //dd($request);
        $username = $request->input('name');
        $password = $request->input('password');


        // return response()->json([
        //     'username' => $username,
        //     'password' => $password,
        // ]);

        $user = new Users();
        $user->name = $username;
        $user->password = Hash::make($password);
        $user->save();
        return redirect()->back();
    }
}
