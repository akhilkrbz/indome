<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Home');

        return view('web/home/index');
    }

    public function contact()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Contact Us');

        return view('web/home/contact');
    }

    public function contactStore(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you can handle the form submission, e.g., send an email or save to the database.

        DB::table('contact_us')->insert([
            'name'      => $request->input('name'),
            'email_id'  => $request->input('email'),
            'phone'     => $request->input('phone'),
            'message'   => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully! Our Team will contact you soon.');
    }

    public function aboutUs()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'About Us');

        return view('web/home/about-us');
    }

    public function products()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Products');

        return view('web/products/list');
    }
}
