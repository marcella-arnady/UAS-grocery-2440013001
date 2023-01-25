<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Mail;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::with('products')->get();
        return view('home', compact('categories'));
    }

    public function about_us(){
        return view('about');
    }

    public function contact_us(){
        return view('contact');
    }

    public function contact_message(Request $request){
        $request->validate([
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'message' => 'required',
        ]);

        DB::table('message')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        echo "<script>
                alert('Successfully to Send Message!');
                window.location.href='/contact';
               </script>";
    }
}
