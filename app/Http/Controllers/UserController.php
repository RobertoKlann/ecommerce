<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = cache()->remember('users', 600, function () {
            return User::all()->toArray();
        });

        return Inertia('User/Index', [
            'users' => $users
        ]);
    }
}
