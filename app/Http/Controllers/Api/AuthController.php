<?php

namespace App\Http\Controllers\Api;

use App\Actions\CreateUserAction;
use App\Enums\GenderEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\AuthResource;

class AuthController extends Controller
{
    public function __construct(
        private readonly CreateUserAction $createUserAction
    ) {}

    public function register(RegistrationRequest $request): AuthResource
    {
        $user = $this->createUserAction->execute(
            $request->email,
            $request->password,
            GenderEnum::from($request->gender)
        );

        $token = $user->createToken('auth_token')->plainTextToken;

        return new AuthResource([
            'user' => $user,
            'token' => $token,
        ]);
    }
}
