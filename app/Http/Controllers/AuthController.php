<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function staffLogin()
    {
        session()->put('main_page', 'Indome Furnitures Login');
        session()->put('sub_page', '');

        return view('auth.staff-login');
    }

    public function loginValidate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Perform login validation logic here
        $user = User::where('email', $request->username)
                    ->orWhere('username', $request->username)
                    ->first();
        if(!$user || !\Hash::check($request->password, $user->password)) {
            return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
        }

        

        // For example, you can check the username and password against your database

        // If validation is successful, redirect to the dashboard
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
