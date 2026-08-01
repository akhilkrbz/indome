<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function products(Request $request)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Products');

        $search = request()->input('search') ?? '';

        $list = Product::with(['images', 'category', 'sub_category'])->orderBy('id', 'desc');

        if($search != "") {
            $list = $list->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('product_code', 'like', '%' . $search . '%');
            });
        }

        $list = $list->paginate(9);

        return view('web/products/list', compact('list', 'search'));
    }


    public function productDetails($id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Product Details');

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $images = DB::table('product_images')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->get();

        $variants = DB::table('product_variants')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->get();

        return view('web/products/product-details', compact('product', 'images', 'variants'));
    }
}
