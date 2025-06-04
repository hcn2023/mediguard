<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Login successful
            return redirect('/dashboard'); // or wherever you want to redirect
        } else {
            // Login failed
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }
    }
}
