<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index', [
            'users' => User::all(),
        ]);
    }
    public function show($id)
    {
        $user = User::where('id', $id)->only(["name", "email", "created_at"]);
        return Inertia::render('User/Show', ['user' => $user]);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt( $request->password),
            'password_confirmation' => bcrypt($request->password_confirmation)
        ]);

        return to_route('user.index');
    }
}
