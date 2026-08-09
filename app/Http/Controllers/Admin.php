<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Admin extends Controller
{
    public function contactList()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Contact List');

        $list = DB::table('contact_us')->whereNull('product_id')->orderBy('id', 'desc')->paginate(10);

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

        $list = $list->paginate(20);

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
            'category_id'       => $request->input('category_id') ?? 0,
            'sub_category_id'   => $request->input('sub_category_id') ?? 0,
            'name'              => $request->input('name'),
            'product_code'      => $request->input('product_code') ?? null,
            'description'       => $request->input('description'),
            'created_at'        => now(),
            'updated_at'        => now(),
            'created_by'        => auth()->user()->id,
            'updated_by'        => auth()->user()->id
        ];

        DB::table('products')->insert($data);

        return redirect()->route('products.list')->with('success', 'Product added successfully.');
    }

    public function productEdit($id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Edit Product');

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $categories = Category::all();
        $sub_categories = DB::table('sub_categories')->get();

        return view('admin/products/edit', compact('product', 'categories', 'sub_categories'));
    }

    public function productUpdate(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'product_code'  => 'required|string|max:255|unique:products,product_code,' . $id,
            'description'   => 'nullable|string',
        ]);

        $data = [
            'category_id'       => $request->input('category_id') ?? 0,
            'sub_category_id'   => $request->input('sub_category_id') ?? 0,
            'name'              => $request->input('name'),
            'product_code'      => $request->input('product_code') ?? null,
            'description'       => $request->input('description'),
            'updated_at'        => now(),
            'updated_by'        => auth()->user()->id
        ];

        DB::table('products')->where('id', $id)->update($data);

        return redirect()->route('products.list')->with('success', 'Product updated successfully.');
    }


    //productAddVariants
    public function productAddVariants(Request $request, $id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Add Product Variants');

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        return view('admin/products/add-variants', compact('product'));
    }

    public function productVariantStore(Request $request)
    {
        $request->validate([
            'product_id'    => 'required|exists:products,id',
            'name'          => 'required|string|max:255',
            'variant_code'  => 'required|string|max:255|unique:product_variants,variant_code',
            'description'   => 'nullable|string',
            'offer_price'   => 'nullable|string|max:20',
            'price'         => 'nullable|string|max:20',
            'size'          => 'nullable|string|max:255',
            'colour'        => 'nullable|string|max:255',
            'material'      => 'nullable|string|max:255',
            'length'        => 'nullable|string|max:255',
            'height'        => 'nullable|string|max:255',
            'weight'        => 'nullable|string|max:255',
            'stock'         => 'nullable|string|max:20',
        ]);

        $data = [
            'product_id'    => $request->input('product_id'),
            'variant_title'  => $request->input('name'),
            'variant_code'  => $request->input('variant_code'),
            'description'   => $request->input('description'),
            'offer_price'   => $request->input('offer_price'),
            'price'         => $request->input('price'),
            'size'          => $request->input('size'),
            'colour'        => $request->input('colour'),
            'material'      => $request->input('material'),
            'length'        => $request->input('length'),
            'height'        => $request->input('height'),
            'weight'        => $request->input('weight'),
            'stock'         => $request->input('stock'),
            'created_at'    => now(),
            'updated_at'    => now(),
            'created_by'    => auth()->user()->id,
            'updated_by'    => auth()->user()->id
        ];

        DB::table('product_variants')->insert($data);

        return redirect()->route('products.list')->with('success', 'Product variant added successfully.');
    }

    public function productVariantsList($id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Product Variants');

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $variants = DB::table('product_variants')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin/products/variants-list', compact('product', 'variants'));
    }

    public function variantEdit($id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Edit Variant');

        $variant = DB::table('product_variants')->where('id', $id)->first();
        if (!$variant) {
            return redirect()->route('products.list')->with('error', 'Variant not found.');
        }

        $product = Product::find($variant->product_id);

        return view('admin/products/edit-variant', compact('variant', 'product'));
    }

    public function variantUpdate(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'variant_code'  => 'required|string|max:255|unique:product_variants,variant_code,' . $id,
            'description'   => 'nullable|string',
            'offer_price'   => 'nullable|string|max:20',
            'price'         => 'nullable|string|max:20',
            'size'          => 'nullable|string|max:255',
            'colour'        => 'nullable|string|max:255',
            'material'      => 'nullable|string|max:255',
            'length'        => 'nullable|string|max:255',
            'height'        => 'nullable|string|max:255',
            'weight'        => 'nullable|string|max:255',
            'stock'         => 'nullable|string|max:20',
        ]);

        $data = [
            'variant_title' => $request->input('name'),
            'variant_code'  => $request->input('variant_code'),
            'description'   => $request->input('description'),
            'offer_price'   => $request->input('offer_price'),
            'price'         => $request->input('price'),
            'size'          => $request->input('size'),
            'colour'        => $request->input('colour'),
            'material'      => $request->input('material'),
            'length'        => $request->input('length'),
            'height'        => $request->input('height'),
            'weight'        => $request->input('weight'),
            'stock'         => $request->input('stock'),
            'updated_at'    => now(),
            'updated_by'    => auth()->user()->id
        ];

        DB::table('product_variants')->where('id', $id)->update($data);

        return redirect()->route('products.variants.list', $request->input('product_id'))->with('success', 'Variant updated successfully.');
    }

    public function productImagesList($id)
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Product Images');

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $images = DB::table('product_images')
            ->where('product_id', $product->id)
            ->orderByDesc('id')
            ->paginate(10);

        return view('admin/products/images-list', compact('product', 'images'));
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

        return view('admin/products/product-details', compact('product', 'images', 'variants'));
    }

    public function productImageStoreOld(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $file = $request->file('image');

        // $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $originalFilename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $safeBaseName = preg_replace('/[^A-Za-z0-9._-]+/', '_', pathinfo($originalFilename, PATHINFO_FILENAME));
        $filename = $safeBaseName . '.' . $extension;

        $path = $file->storeAs("products/{$id}", $filename, 'public');

        DB::table('product_images')->insert([
            'product_id' => $product->id,
            'filename' => $filename,
            'created_at' => now(),
            'created_by' => auth()->user()->id,
        ]);

        return redirect()->route('products.images.list', $product->id)->with('success', 'Image uploaded successfully.');
    }


    public function productImageStore(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $product = Product::findOrFail($id);

        $file = $request->file('image');
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $safeBaseName = preg_replace('/[^A-Za-z0-9._-]+/', '_', $originalFilename);
        $filename = $safeBaseName . '_' . uniqid() . '.' . $extension; // keep uniqid to avoid overwrites

        // Store under storage/app/public instead of public/
        $path = $file->storeAs("products/{$id}", $filename, 'public');

        DB::table('product_images')->insert([
            'product_id' => $product->id,
            'filename' => $filename,
            'created_at' => now(),
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('products.images.list', $product->id)
            ->with('success', 'Image uploaded successfully.');
    }

    public function productImageDelete($productId, $imageId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return redirect()->route('products.list')->with('error', 'Product not found.');
        }

        $image = DB::table('product_images')
            ->where('id', $imageId)
            ->where('product_id', $product->id)
            ->first();

        if (!$image) {
            return redirect()->route('products.images.list', $product->id)->with('error', 'Image not found.');
        }

        $imagePath = 'products/' . $product->id . '/' . $image->filename;
        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }

        DB::table('product_images')->where('id', $imageId)->delete();

        return redirect()->route('products.images.list', $product->id)->with('success', 'Image deleted successfully.');
    }

    public function productEnquiries()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Product Enquiries');

        $list = DB::table('contact_us')
        ->select('contact_us.*', 'products.name as product_name')
        ->join('products', 'contact_us.product_id', '=', 'products.id')
        ->whereNotNull('product_id')->orderBy('id', 'desc')->paginate(10);

        return view('admin/product-enquiries', compact('list'));
    }
}
