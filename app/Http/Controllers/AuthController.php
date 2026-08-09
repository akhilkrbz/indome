<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function staffLogin()
    {
        session()->put('main_page', 'Indome Furnitures Login');
        session()->put('sub_page', '');

        return view('admin.auth.staff-login');
    }

    public function loginValidate(Request $request)
    {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials!');

    }

    public function dashboard()
    {
        session()->put('main_page', 'Indome Furnitures Dashboard');
        session()->put('sub_page', '');

        $total_products = Product::count();
        $product_enqs = DB::table('contact_us')->whereNotNull('product_id')->count();
        $other_enqs = DB::table('contact_us')->whereNull('product_id')->count();

        return view('admin.dashboard', compact('total_products', 'product_enqs', 'other_enqs'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
