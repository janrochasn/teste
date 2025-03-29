<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function __construct(protected UserService $userService) {
        //
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', Password::min(12)->mixedCase()->numbers()->symbols()],
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $user = $this->userService->register([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        if ($user) {
            return response()->json(['message' => 'Usuário criado com sucesso!'], 200);
        }
        
        return response()->json(['message' => 'Erro ao criar usuário'], 500);
    }

    public function login(Request $request)
    {
        //
    }
}
