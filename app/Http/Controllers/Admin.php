<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
            'category_id' => $request->input('category_id'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('sub_categories')->insert($data);

        return redirect()->route('categories.list')->with('success', 'Subcategory added successfully.');
    }


    public function productList()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Product List');

        $search = request()->input('search') ?? '';

        $list = Product::with(['images', 'category', 'sub_category'])->orderBy('id', 'desc');

        if($search != "") {
            $list = $list->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('product_code', 'like', '%' . $search . '%');
            });
        }

        $list = $list->paginate(10);

        return view('admin/products/list', compact('list', 'search'));
    }

    //productAdd
    public function productAdd()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Add Product');

        $categories = Category::all();
        $sub_categories = DB::table('sub_categories')->get();

        return view('admin/products/add', compact('categories', 'sub_categories'));
    }

    public function productStore(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'product_code'  => 'required|string|max:255|unique:products,product_code',
            'description'   => 'nullable|string',
        ]);

        $data = [
            'category_id'       => $request->input('category_id'),
            'sub_category_id'   => $request->input('sub_category_id'),
            'name'              => $request->input('name'),
            'product_code'      => $request->input('product_code'),
            'description'       => $request->input('description'),
            'created_at'        => now(),
            'updated_at'        => now(),
            'created_by'        => auth()->user()->id,
            'updated_by'        => auth()->user()->id
        ];

        DB::table('products')->insert($data);

        return redirect()->route('products.list')->with('success', 'Product added successfully.');
    }


    //productAddVariants
    public function productAddVariants(Request $request, $id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Add Product Variants');

        $product = Product::findOrFail($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        return view('admin/products/add-variants', compact('product'));
    }
}
