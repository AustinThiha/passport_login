<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    public function register(Request $request)
    {
        $validData =  $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user = User::where('phone', '=', $request->phone)->first();
        if ($user == null) {
            $user = User::create($validData);
        }

        $token = $user->createToken('android')->accessToken;

        return response([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function getUserFromToken()
    {
        # code...
        $user = auth('api')->user();

        return response([
            'user' => $user
        ]);
    }
}
