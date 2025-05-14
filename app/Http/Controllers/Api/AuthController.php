<?php

namespace App\Http\Controllers\Api;

use App\Actions\CreateUserAction;
use App\Enums\GenderEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\AuthResource;

class AuthController extends Controller
{
    public function register(RegistrationRequest $request): AuthResource
    {
        $user = app(CreateUserAction::class)->execute(
            $request->email,
            $request->password,
            GenderEnum::from($request->gender)
        );

        $token = $user->createToken('auth_token')->plainTextToken;

        return AuthResource::make([
            'user' => $user,
            'token' => $token,
        ]);
    }
}
