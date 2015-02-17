<?php namespace OpsGuru\Repositories;

use OpsGuru\User;

class UserRepository {
    /**
     * @param $userData
     * @return static
     */
    public function findByUsernameOrCreate($userData)
    {
        return User::firstOrCreate([
            'username' => $userData->nickname,
            'email'    => $userData->email,
            'avatar'   => $userData->avatar
        ]);
    }

}
