<?php

namespace App\Contracts;

interface AuthServiceInterface
{
    public function attemptLogin(string $email, string $password, bool $remember = false): bool;
    public function user(): ? \App\Models\User;
    public function logout();
}
