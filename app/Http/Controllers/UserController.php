<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\User_profile;
use Auth;
use DB;

class UserController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $profile = User_profile::find($id);
        return view('user.profile',['user' => $user, 'profile' => $profile]);
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function changePassword()
    {
        return view('user.change-password');
    }

    public function orders()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.orders',['orders' => $orders]);
    }

    public function wishlist()
    {
        return view('user.wishlist');
    }

    public function reviewRatings()
    {
        return view('user.review-ratings');
    }
    
    public function complaints()
    {
        return view('user.complaints');
    }

    public function trackOrder()
    {
        return view('user.user-track-order');
    }

    public function change_Password(Request $request){
        $this->validate($request, [
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user_id = $request->input('user_id');
        $pass = $request->input('password');
        $password = Hash::make($pass);
        
        DB::table('users')
                ->where('id', $user_id)
                ->update(['password' => $password]);

        return redirect()->back()->with('info','Password updated successfully');;                 
    }
}
