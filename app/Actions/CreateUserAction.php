<?php

namespace App\Actions;

use App\Enums\GenderEnum;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    /**
     * Create a new class instance.
     */
    public function execute(
        string $email,
        string $password,
        GenderEnum $gender
    ): User {
        return User::create([
            'email' => $email,
            'password' => Hash::make($password),
            'gender' => $gender,
        ]);
    }
}
