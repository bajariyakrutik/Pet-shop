<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addToCart(Request $request)
    {
        $productId = $request->productId;
        $productById = Product::where('id',$productId)->first();
        Cart::add([
            'id' => $productId,
            array('imgurl' => $productById->cover_image),
            'name' => $productById->title,
            'price' => $productById->price,
            'qty' => $request->qty
        ]);
        //echo $productById->cover_image;
        return redirect('/cart-show')->with('status','Product added in cart.');
    }

    public function cartShow()
    {
        $cartProducts = Cart::Content();
        return view('cart.show', ['cartProducts' => $cartProducts]);
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        return redirect('/cart-show')->with('status','Cart updated successfully.');
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart-show')->with('status','Product Removed.');
    }
}
