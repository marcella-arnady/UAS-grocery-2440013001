<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function search_product(Request $request){
        $name = $request->name;

        $search_products = Product::where('name', 'LIKE', "%$name%")->paginate(8)->withQueryString();

        return view('search', compact('search_products'));
    }

    public function search_product_admin(Request $request){
        $name = $request->name;

        $search_products = Product::where('name', 'LIKE', "%$name%")->paginate(8)->withQueryString();

        return view('search_admin', compact('search_products'));
    }

    public function manage_product(){
        $products = DB::table('products')->paginate(10);

        return view('manage_product', compact('products'));
    }

    public function add_form(){
        return view('product_add_form');
    }

    public function add_logic(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'image|mimes:jpeg,jpg,png',
        ]);

        $original_name = $request->file('photo')->getClientOriginalName();
        $original_ext = $request->file('photo')->getClientOriginalExtension();
        $product_filename = $original_name . '_' . time() . '.' . $original_ext;
        $request->file('photo')->storeAs('public/images', $product_filename);

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'detail' => $request->detail,
            'price' => $request->price,
            'photo' => $product_filename
        ]);

        return redirect()->route('manage_product');
    }

    public function update_product_form(Request $request){
        $product = Product::find($request->product_id);

        return view('update_product_form', compact('product'));
    }

    public function update_product_logic(Request $request){
        $product = Product::find($request->product_id);

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'image|mimes:jpeg,jpg,png',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->detail = $request->detail;
        $product->price = $request->price;

        $image_file = $request->file('photo');
        // IF image update
        if($image_file) {
            $original_name = $request->file('photo')->getClientOriginalName();
            $original_ext = $request->file('photo')->getClientOriginalExtension();
            $product_filename = $original_name . '_' . time() . '.' . $original_ext;
            $request->file('photo')->storeAs('public/images', $product_filename);
            $product->photo = $product_filename;
        }

        $product->save();

        echo "<script>
                alert('Successfully update the product!');
                window.location.href='/product/manage';
               </script>";
        // return redirect()->route('manage_product');
    }

    public function delete_product(Request $request){
        $product = Product::find($request->product_id);
        $product->delete();

        echo "<script>
                alert('Successfully delete the product!');
                window.location.href='/product/manage';
               </script>";
        // return redirect()->route('manage_product');
    }
}
