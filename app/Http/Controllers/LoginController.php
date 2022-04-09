<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        if ($user && $user->password == $request->password) {
            return response()->json([
                // 'token' => $user->createToken('MyApp')->accessToken,
                // 'user' => $user
                'status' => true,
                'pesan' => 'Login berhasil',
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'pesan' => 'Unauthorised'
            ], 401);
        }
    }
}
