<?php 

namespace App\Services;

use App\Contracts\UserServiceInterface;
use App\Models\User;

class UserService implements UserServiceInterface{
    public function update($userId, $userType, $userName, $userEmail){
        $user = User::find($userId);
        $user->update([
            'userType' => $userType,
            'userName' => $userName,
            'userEmail' => $userEmail,
        ]);
    }
}