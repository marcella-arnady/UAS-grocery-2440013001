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
        return view ('index');
    }

    public function home(){
        $products = DB::table('products')->paginate(10);
        return view('home', ['products'=>$products]);

        
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
