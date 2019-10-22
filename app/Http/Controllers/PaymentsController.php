<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Cart;
use Auth;

class PaymentsController extends Controller
{
    public function index()
    {
        /* return view('cart.payment'); */
        $cartProducts = Cart::Content();
        return view('cart.payment', ['cartProducts' => $cartProducts]);
    }

    public function pay(Request $request){
 
        $api = new \Instamojo\Instamojo(
               config('services.instamojo.api_key'),
               config('services.instamojo.auth_token'),
               config('services.instamojo.url')
           );
    
       try {
           $response = $api->paymentRequestCreate(array(
               "purpose" => "Wagin Tails",
               "amount" => $request->amount,
               "buyer_name" => "$request->name",
               "send_email" => false,
               "email" => "$request->email",
               "phone" => "$request->phone",
               "redirect_url" => "http://ec2-18-191-51-189.us-east-2.compute.amazonaws.com//pay-success",
               ));

               header('Location: ' . $response['longurl']);
               exit();
       }catch (Exception $e) {
           print('Error: ' . $e->getMessage());
       }
    }
    
    public function success(Request $request){
        try {
           $api = new \Instamojo\Instamojo(
               config('services.instamojo.api_key'),
               config('services.instamojo.auth_token'),
               config('services.instamojo.url')
           );
    
           $response = $api->paymentRequestStatus(request('payment_request_id'));
    
           if( !isset($response['payments'][0]['status']) ) {
              dd('payment failed');
           } else if($response['payments'][0]['status'] != 'Credit') {
                dd('payment failed');
           } 
        }catch (\Exception $e) {
            dd('payment failed');
        }
        $order = new Order();
        $cartProducts = Cart::Content();
        $order->cart = $cartProducts;
        $order->address = $request->address;
        $order->name = $request->name;
        /* $order->payment_id = $payid; */
        Auth::user()->orders()->save($order);
        Cart::destroy();
        return redirect('/homepage')->with('success', 'Order Success !! You can continue to buy now !');
    }
}
