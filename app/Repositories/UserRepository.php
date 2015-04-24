<?php

namespace OpsGuru\Repositories;

use OpsGuru\User;

class UserRepository
{
    /**
     * @param $userData
     *
     * @return static
     */
    public function findByUsernameOrCreate($userData)
    {
        return User::firstOrCreate([
            'username'     => $userData->getNickName(),
            'email'        => $userData->getEmail(),
            'avatar'       => $userData->getAvatar(),
            'access_token' => $userData->token,
        ]);
    }
}
