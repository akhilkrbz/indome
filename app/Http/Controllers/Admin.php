<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function categoryList()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Category List');

        // $list = DB::table('categories')->orderBy('id', 'desc')->paginate(10);
        $list = Category::with('sub_categories')->orderBy('id', 'desc')->paginate(10);

        return view('admin/categories', compact('list'));
    }

    //categoryAdd
    public function categoryAdd(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $data = [
            'category_name' => $request->input('category_name'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('categories')->insert($data);

        return redirect()->route('categories.list')->with('success', 'Category added successfully.');
    }


    //subCategoryAdd
    public function subCategoryAdd(Request $request)
    {
        $request->validate([
            'sub_category_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $data = [
            'sub_category_name' => $request->input('sub_category_name'),
            'category_id'       => $request->input('category_id'),
            'created_at'        => now(),
            'updated_at'        => now(),
        ];

        DB::table('sub_categories')->insert($data);

        return redirect()->route('categories.list')->with('success', 'Subcategory added successfully.');
    }
}
