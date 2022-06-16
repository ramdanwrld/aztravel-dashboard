<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiLoginController extends Controller
{
    public function Login(Request $request)
    {
        if (\Auth::attemp(['email' => $request -> email, 'password' => $request -> password])) {
            $user = \Auth::user();
            $token = $user->createToken('user')->accessToken;
            $data['user'] = $user;
            $data['token'] = $token;
            return response()->json(
                [
                    'success' => true,
                    'data' => $data,
                    'pesan' => 'Success'
                ]

            );
        }else {
            return response()->json(
                [
                    'success' => false,
                    'data' => '',
                    'pesan' => 'Failed'
                ]

            );
        }
    }
}
