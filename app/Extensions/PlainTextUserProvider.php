<?php

namespace App\Extensions;

use Illuminate\Auth\EloquentUserProvider;

class PlainTextUserProvider extends EloquentUserProvider
{
    public function validateCredentials($user, array $credentials)
    {
        $plain = $credentials['password'];

        // Compare directly without hashing
        return $plain === $user->Password;
    }
}
