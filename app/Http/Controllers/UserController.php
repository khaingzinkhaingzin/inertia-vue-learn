<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $user = $user->only(["name", "email", "email_verified_at"]);
        return Inertia::render('User/Show', ['user' => $user]);
    }
}
