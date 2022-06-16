<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ApiLoginController extends Controller
{
    public function Login(Request $request)
    {
        if (\Auth::attempt(['email' => $request -> email, 'password' => $request -> password])) {
            $user = \Auth::user();
            $token = $user->createToken('user')->accessToken;
            $data['user'] = $user;
            $data['token'] = $token;
            return response()->json(
                [
                    'success' => true,
                    'data' => $data,
                    'pesan' => 'Login Behasil',200
                ]

            );
        }else {
            return response()->json(
                [
                    'success' => false,
                    'data' => '',
                    'pesan' => 'Login Gagal',
                ],401

            );
        }
    }
}
