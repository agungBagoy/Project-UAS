<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate();

        return view('users.index', compact('user'));
    }
}
