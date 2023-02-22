<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth:sanctum', 'rol:admin'], ['except' => ['index', 'show']]);
    // }
    public function login(Request $request) {

        $user = User::where('login', $request->login)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            return response()->json(['token' => $user->createToken($user->login)->plainTextToken]);
        }
    }
}
