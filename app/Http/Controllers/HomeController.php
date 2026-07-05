<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
