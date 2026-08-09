<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Mailtrap\Mime\MailtrapEmail;
use Symfony\Component\Mime\Address;

class HomeController extends Controller
{
    public function index()
    {
        session()->put('main_page', 'Indome Furnitures ');
        session()->put('sub_page', 'Home');

        $search = request()->input('search') ?? '';

        $list = Product::whereHas('images')->with(['images', 'category', 'sub_category'])->orderBy('id', 'desc');

        if($search != "") {
            $list = $list->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('product_code', 'like', '%' . $search . '%');
            });
        }

        $list = $list->limit(12)->get();

        return view('web/home/index', compact('list', 'search'));
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
            'product_id'  => $request->input('product_id') ?? null,
            'phone'     => $request->input('phone'),
            'message'   => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if( $request->input('product_id')) {
            return redirect()
                ->route('view-product.details', ['id' => $request->input('product_id')])
                ->with('success', 'Your message has been sent successfully! Our Team will contact you soon.')
                ->with('send_email', true);
        } else {
            return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully! Our Team will contact you soon.');
        }

        
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
        $category = request()->input('category') ?? '';
        $subcategory = request()->input('subcategory') ?? '';

        $list = Product::with(['images', 'category', 'sub_category'])->orderBy('id', 'desc');

        if($search != "") {
            $list = $list->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('product_code', 'like', '%' . $search . '%');
            });
        }

        if($category != "") {
            $list = $list->where('category_id', $category);
        }

        if($subcategory != "") {
            $list = $list->where('sub_category_id', $subcategory);
        }

        $list = $list->paginate(9);
        $list->appends($request->except('page'));

        $categories = Category::with('sub_categories')->get();

        return view('web/products/list', compact('list', 'search', 'categories'));
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


    public function sendMail() {

        $pending_emails = DB::table('contact_us')
            ->where('email_to_admin', 0)
            ->orWhere('email_to_user', 0)
            ->get();

        $mailtrap = MailtrapClient::initSendingEmails(
            apiKey: env('MAILTRAP_API_KEY')
        );

        foreach ($pending_emails as $key => $single_email) {

            if($single_email->product_id != null && $single_email->product_id != 0) {
                
                $res = false;
                $email_to_user = $single_email->email_to_user == 1 ? 1 : 0;
                $email_to_admin = $single_email->email_to_admin == 1 ? 1 : 0;
                if ($single_email->email_to_user == 0) {
                    $product = Product::find($single_email->product_id);
                    $email_body = view('emails.product-enquiry-user-email', [
                        'product' => $product, 
                        'contact' => $single_email
                    ])->render();
                    $email_to = $single_email->email_id;
                    $subject = "Thank You for Contacting Indomefurnitures";
                    $email_to_user = 1;

                    $res = $this->sendEmailToUser($email_body, $email_to, $subject);

                }

                if ($single_email->email_to_admin == 0) {
                    $product = Product::find($single_email->product_id);
                    $email_body = view('emails.product-enquiry-admin-email', [
                        'product' => $product, 
                        'contact' => $single_email
                    ])->render();
                    $email_to = "indomefurnitures@gmail.com";
                    $subject = "Customer Enquiry Received for ".$product->name." Action Required";
                    $email_to_admin = 1;

                    $res = $this->sendEmailToUser($email_body, $email_to, $subject);

                }

                if($res) {
                    DB::table('contact_us')
                        ->where('id', $single_email->id)
                        ->update([
                            'email_to_admin' => $email_to_admin,
                            'email_to_user' => $email_to_user,
                            'updated_at' => now(),
                        ]);
                }
            }
            
        }
    }


    public function sendEmailToUser($email_body, $email_to, $subject) {

        try {
            $mailtrap = MailtrapClient::initSendingEmails(
                apiKey: env('MAILTRAP_API_KEY')
            );

            $email = (new MailtrapEmail())
                ->from(new Address('info@indomefurnitures.com', 'Indome Furnitures'))
                ->to(new Address($email_to))
                ->subject($subject)
                ->html($email_body)
                ->text('Your email client does not support HTML.');

            $response = $mailtrap->send($email);

            return true;
        } catch (\Throwable $th) {
            return false;
        }
        

        // Access response body as array (helper optional)
        // var_dump(ResponseHelper::toArray($response));
    }
}
