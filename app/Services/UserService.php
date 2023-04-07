<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUser($id)
    {
        return User::find($id);
    }

    public function createUser($data)
    {
        return User::create($data);
    }

    public function updateUser($id, $data)
    {
        $User = User::findOrFail($id);
        $User->update($data);
        return $User;
    }

    public function deleteUser($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
    }
}
