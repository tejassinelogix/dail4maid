<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use App\User_profile;
use App\VerifyUser;
use Mail;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\ServiceCategory;
use App\Appointments;
use DB;
use Exception;

class UserController extends Controller {

    public $successStatus = 200;

    /**
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login() {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            //$success['token'] = $user->createToken('MyApp')->accessToken;
            $success['token'] = $user;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'mobile' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $email = $input['email'];
        $user_email = User::where('email', $email)->first();
        if ($user_email) {
            return response()->json(['error' => 'Email Already Exits'], 201);
        } else {
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            if ($user) {
                $input_profile = array(
                    'id' => $user->id,
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'contact' => $input['mobile'],
                );
                $user_profile = User_profile::create($input_profile);
                $success['token'] = $user->createToken('MyApp')->accessToken;
                $success['name'] = $user->name;
                $success['id'] = $user->id;
                
                $tokenverify = str_random(40);
                
                //$id = $user->id;
                $verifyUsetData = array(
                    'user_id' => $user->id,
                    'token' => $tokenverify,
                     
                );
                $verifyUser = VerifyUser::create($verifyUsetData);
                $success['user_id'] = $user->id;
                $success['token'] = $tokenverify;
                
                Mail::to($user->email)->send(new VerifyMail($user));
                return $user;

                return response()->json(['success' => $success], $this->successStatus);
            } else {
                return response()->json(['error' => 'Error'], 401);
            }
        }





//        $input = $request->all();
//        $input['password'] = bcrypt($input['password']);
//        $user = User::create($input);
//        $success['token'] = $user->createToken('MyApp')->accessToken;
//        $success['name'] = $user->name;
//        return response()->json(['success' => $success], $this->successStatus);
    }

    public function signup() {
        // echo"call now";

        $name = request('name');
        $email = request('email');
        $pass = request('password');
        $password = Hash::make($pass);
        $contact = request('contact');


        $post = new User;
        $post->name = $name;
        $post->email = $email;
        $post->password = $password;
        $post->save();
        $data = $post->id;

        if ($data) {
            $postuser = new User_profile;
            $postuser->id = $data;
            $postuser->name = $name;
            $postuser->email = $email;
            $postuser->contact = $contact;
            $postuser->save();
            $datauser = $postuser->id;
            return json_encode(array("success" => 1));
        } else {
            return json_encode(array("success" => 0));
        }
    }

    public function saveAppointment() {

        $input_reg['name'] = request('name');
        $input_reg['email'] = request('email');
        $input_reg['password'] = bcrypt(request('password'));

        //$user = User::create($input_reg);
        // $user_id = $user->id;
        $service_cat_id = request('service_cat_id');
        $service_cat = ServiceCategory::where('service_cat_id', $service_cat_id)->get();
        $amt = $service_cat[0]['service_price'];

        $data = DB::table('appointments')->insert([
            'user_id' => request('userid'),
            'name' => request('name'),
            'email' => request('email'),
            'region' => request('region'),
            'address' => request('address'),
            'contact' => request('contact'),
            'service_cat_id' => request('service_cat_id'),
            'c_days' => request('c_days'),
            'c_stay_hours' => request('c_stay_hours'),
            'c_qty' => request('c_qty'),
            'c_material' => request('c_material'),
            'c_date' => request('c_date'),
            'c_from_time_slot' => request('c_from_time_slot'),
            'c_to_time_slot' => request('c_to_time_slot'),
            'c_instruction' => request('c_instruction'),
            'pay_method' => request('pay_method'),
            'amount' => request('amount'),
            'status' => 'Pending',
        ]);

        if ($data) {
            $success['token'] = 1;
        } else {
            $success['token'] = 0;
        }

        return response()->json(['success' => $success]);
    }

    /**
     * services api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function services() {
        $services = ServiceCategory::where('status', 1)->get();
        return response()->json(['success' => $services], $this->successStatus);
    }

    /**
     * appointment api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function userAppointments() {
        $id = request('userId');
        $appointments = Appointments::where('user_id', $id)->get();
        return response()->json(['success' => $appointments], $this->successStatus);
    }

    /**
     * user details api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function userDetails() {
        $id = request('userId');
        $userdetails = User_profile::where('id', $id)->get();
        return response()->json(['success' => $userdetails], $this->successStatus);
    }

    /**
     * appointment api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function Appointment() {
        $id = request('aptId');
        $appointments = Appointments::where('id', $id)->orderBy('id', 'desc')->get();
        return response()->json(['success' => $appointments], $this->successStatus);
    }

    /**
     * update appointment api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function updateAppointment() {

        $apt_id = request('apt_id');
        $service_cat_id = request('service_cat_id');
        $service_cat = ServiceCategory::where('service_cat_id', $service_cat_id)->get();
        $amt = $service_cat[0]['service_price'];

        $data = DB::table('appointments')->where('id', $apt_id)->update([
            'user_id' => request('userid'),
            'name' => request('name'),
            'email' => request('email'),
            'region' => request('region'),
            'address' => request('address'),
            'contact' => request('contact'),
            'service_cat_id' => request('service_cat_id'),
            'c_days' => request('c_days'),
            'c_stay_hours' => request('c_stay_hours'),
            'c_qty' => request('c_qty'),
            'c_material' => request('c_material'),
            'c_date' => request('c_date'),
            'c_from_time_slot' => request('c_from_time_slot'),
            'c_to_time_slot' => request('c_to_time_slot'),
            'c_instruction' => request('c_instruction'),
            'pay_method' => request('pay_method'),
            'amount' => request('amount'),
//            'amount' => $amt,
            'status' => 'Pending',
        ]);

        if ($data) {
            $success['token'] = 1;
        } else {
            $success['token'] = 0;
        }

        return response()->json(['success' => $success]);
    }

    /**
     * update account api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function updateAccount() {

        $user_id = request('userid');

        $data = DB::table('user_profiles')->where('id', $user_id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'contact' => request('contact'),
            'address' => request('address'),
            'city' => request('city'),
            'state' => request('state'),
            'country' => request('country'),
        ]);

        if ($data) {
            $success['token'] = 1;
        } else {
            $success['token'] = 0;
        }

        return response()->json(['success' => $success]);
    }

}
