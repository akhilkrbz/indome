<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function contactList()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Contact List');

        $list = DB::table('contact_us')->orderBy('id', 'desc')->paginate(10);

        return view('admin/contacts', compact('list'));
    }
}
