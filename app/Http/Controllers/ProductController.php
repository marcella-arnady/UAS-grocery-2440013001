<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::table('products')->get();
    }

    public function detail($id) {
        $product_detail = Product::find($id);

        return view('product_detail', compact('product_detail'));
    }

    public function maintenance(){
        $users = DB::table('users')->paginate(10);

        return view('maintenance', compact('users'));
    }


        

    public function update_user_form(Request $request){
        $user = User::find($request->user_id);

        return view('update_user_form', compact('user'));
    }

    public function update_user_logic(Request $request){
        $user = User::find($request->user_id);

        $request->validate([
            "role" => "required"
        ]);

        $user->role = $request->role;
 
        $user->save();

        echo "<script>
                alert('Successfully update the profile!');
                window.location.href='/maintenance';
               </script>";
    }

    public function delete_user(Request $request){
        $user = User::find($request->user_id);
        $user->delete();

        echo "<script>
                alert('Successfully delete the profile!');
                window.location.href='/maintenance';
               </script>";
    }
}
