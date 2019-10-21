<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Order;
use Auth;
use Cart;
use App\User;

class OrdersController extends Controller
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

    public function index()
    {
        return view('order')->with('orders',$orders);
    }

    public function myOrder()
    {
        $orders = Auth::user()->orders;
        return view('order')->with('orders', $orders);
    }
}
