<?php

namespace App\Contracts;

interface UserServiceInterface
{
    public function update($userId, $userType, $userName, $userEmail);
}
