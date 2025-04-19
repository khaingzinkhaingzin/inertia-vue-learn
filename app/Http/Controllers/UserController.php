<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $user = [
            'name'=> "Ktz"
        ];
        return Inertia::render('User/Show', ['user' => $user]);
    }
}
