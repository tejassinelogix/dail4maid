<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Cart;
use Session;
use Auth;

class ProductController extends Controller
{
    private $language;
    public function __construct() {

        if( Session::has('locale') ){
            $this->language = Session::get('locale');
        }      
    }
    public function getIndex(){
        if(Session::has('locale') ){
            $this->language = Session::get('locale');
        }
        else{
            $this->language = app()->getLocale();
        }
        $products = Product::all();
    	return view('shop.index', ['products' => $products, 'language' => $this->language]);
    }

    public function getProductdetails($id){
        if(Session::has('locale') ){
            $this->language = Session::get('locale');
        }
        else{
            $this->language = app()->getLocale();
        }
        $product = Product::where('id', $id)->get();
        return view('shop.product-details', ['products' => $product, 'language' => $this->language]);
    }

    public function getAddToCart(Request $request, $id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
        $cart->add($product,$product->id);
    	$request->session()->put('cart', $cart);
    	// dd($request->session()->get('cart'));
    	// return redirect()->('product.index');
         return redirect()->back();
    }

    public function getCart(){
        if(Session::has('locale') ){
            $this->language = Session::get('locale');
        }
        else{
            $this->language = app()->getLocale();
        }

        if(!Session::has('cart')){
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'language' => $this->language]);
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }  
        return redirect('/shopping-cart');
    }
    
    public function getIncreaseByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);
        Session::put('cart',$cart);
        return redirect('/shopping-cart');
    }
    
    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }        
        return redirect('/shopping-cart');
    }

    public function getCheckout(){
        if(Session::has('locale') ){
            $this->language = Session::get('locale');
        }
        else{
            $this->language = app()->getLocale();
        }
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.paypalPay',['products' => $cart->items,'total' => $total, 'language' => $this->language]);
    }

    public function postCheckout(Request $request){
        
        if(!Session::has('cart')){
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try{

            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->amount = $request->input('amount');
            $order->payment_status = 'Paid';
//            $order->payment_id = $charge->id;
//            $order->payment_details = $charge;
            
            $order->payment_id = '1111';
            $order->payment_details="Test";


            Auth::user()->orders()->save($order);

        }catch(\Exception $e){
            echo $e->getMessage();
            die;
            // return view('shop.paypalPay')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('dashboard')->with('success','successfully purchased products');
    }


}
