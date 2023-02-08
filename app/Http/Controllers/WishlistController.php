<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class WishlistController extends Controller
{
    public function wishlist(){
        $wishlists = User::find(Auth::user()->id)->wishlists;
        return view('wishlist', compact('wishlists'));
    }


    public function add_to_wishlist(Request $request){
        Wishlist::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id
        ]);

        echo "<script>
                alert('Successfully add product to your cart!');
                window.location.href='/wishlist';
               </script>";

    }

    public function delete_wishlist(Request $request){
        $wishlist = Wishlist::find($request->wishlist_id);
        $wishlist->delete();

        echo "<script>
                alert('Successfully delete product on your cart');
                window.location.href='/wishlist';
               </script>";
    }

    public function buy_wishlist(Request $request){
        $wishlist = Wishlist::find($request->wishlist_id);
        $wishlist->delete();

        echo "<script>
                alert('Successfully buy product on your cart');
                window.location.href='/wishlist';
               </script>";
    }

    public function purchase(){
        $wishlists = User::find(Auth::user()->id)->wishlists;
    }
}
