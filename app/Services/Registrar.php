<?php namespace OpsGuru\Services;

use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use OpsGuru\User;
use Validator;

class Registrar implements RegistrarContract
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'avatar'   => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email'    => $data['email'],
            'avatar'   => $data['avatar'],
        ]);
    }
}
