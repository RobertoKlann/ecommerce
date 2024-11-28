<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return inertia('User/Index', [
            'users' => User::all()->toArray()
        ]);
    }
}