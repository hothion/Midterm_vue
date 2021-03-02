<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use JWTAuth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Resources\Json\ResourceCollection;
class LoginController extends Controller
{
    public $loginAfterSignUp = true;

    public function login(Request $request)
    {
        $input = $request->only('username', 'password');
        $token = null;
        if (!$token = JWTAuth::attempt($input)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }
        return response()->json([
            'status' => true,
            'token' => $token,
        ]);
    }
    function edit_profile(Request $request){
        
    }
}