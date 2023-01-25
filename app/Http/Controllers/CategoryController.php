<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('category_id', '=', $request->id)->paginate(8)->withQueryString();

        return view('product_by_category', compact('products'));
    }
}
