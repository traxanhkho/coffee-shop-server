<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                // throw new \Exception('Error in Login');
                return response()->json([
                    'status_code' => 401,
                    'message' => 'Unauthorized',
                ]);
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }

    public function createUser(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'number_phone' => 'required',
                    'address' => 'required|min:16',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|min:8'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'number_phone' => $request->number_phone,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $user->roles()->attach(3);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token_type' => 'Bearer',
                'access_token' => $user->createToken("authToken")->plainTextToken
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }


    public function index(Request $request)
    {
        return $request->user();
    }


    // LARAVEL APP app/Http/Controllers/UserController.php
    public function logout(Request $request)
    {
        try {
            Auth::logout();
            return response()->json(['message' => 'Logged Out'], 200);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Logout',
                'error' => $error,
            ]);
        }
    }
}
