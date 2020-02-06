<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use App\ServiceCategory;
use App\Admin;
use App\Admin_profile;
use App\User_profile;
use App\Appointments;
use DB;

use App\User;
use App\Maids;
use App\Maid_profile;
use App\VerifyUser;
use Mail;
use App\Mail\VerifyMail;
use PDF;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $users = User::all();
        $service_cat = ServiceCategory::all();
        $appointments = Appointments::all();

        $users_cnt = $users->count();
        $service_cnt = $service_cat->count();
        $appointments_cnt = $appointments->count();
        return view('admin.admin-dashboard', ['service_cnt' => $service_cnt,'users_cnt' => $users_cnt,'appointments_cnt' => $appointments_cnt]);
    }

    public function profile()
    {
        if (Session::has('locale')) {
            $language = Session::get('locale');
        } else {
            $language = app()->getLocale();
        }
        $id = Auth::user()->id;
        $user = Admin_profile::find($id);
        return view('admin.profile',['user' => $user]);
    }

    public function dashboard()
    {
        $users = User::all();
        $service_cat = ServiceCategory::all();
        $appointments = Appointments::all();

        $users_cnt = $users->count();
        $service_cnt = $service_cat->count();
        $appointments_cnt = $appointments->count();

       return view('admin.admin-dashboard', ['service_cnt' => $service_cnt,'users_cnt' => $users_cnt,'appointments_cnt' => $appointments_cnt]);
    }

    public function updateProfile(Request $request){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }

            $id = Auth::user()->id;
            $this->Validate($request, [
                'name' => 'required|string|max:255',
                //'email' => 'required|string|email|max:255|unique:admins',
//                'password' => 'required|string|min:6|confirmed',
                'phone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'pin_code' => 'required',
            ]);

            $data = array(
                'name' => $request->name,
//                'password'=> Hash::make($request->password),
            );

            $data_profile = array(
                'user_id' => $id,
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pin_code' => $request->pin_code,
            );
            $flg = Admin::find($id)->update($data);
            $flg1 = Admin_profile::find($id);
            if($flg1){
                $flg1 = Admin_profile::find($id)->update($data_profile);
            }
            else{
                $post = Admin_profile::create($data_profile);
            }
            return redirect()->back()->with('status','Save successfully');
    }

    //------------Service Category----------------------//


    public function addServiceCategory(){
        if(Session::has('locale') ){
            $this->language = Session::get('locale');
        }
        else{
            $this->language = app()->getLocale();
        }
        return view('admin.add-service-category', ['language' => $this->language]);
    }

    public function viewServiceCategory(){
        if (Session::has('locale')) {
            $language = $this->language = Session::get('locale');
        } else {
            $language = $this->language = app()->getLocale();
        }
        $service_cat = ServiceCategory::all();
        return view('admin.view-service-category', ['service_cat' => $service_cat]);
    }

    protected function addNewServiceCategory(Request $request){

            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }

            $this->Validate($request, [
                'CategoryName' => 'required|string|max:255',
//                'CategoryDesc' => 'required|string|max:500',
//                'MetaTitle' => 'required|string|max:255',
//                'MetaKeyword' => 'required|string|max:500',
//                'MetaDescription' => 'required|string|max:500',
                'ServicePrice' => 'required|string|max:255',
                'image' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
            ]);


            $destinationPath = public_path('images');

            if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $destinationPath = public_path('category_images');
                    $imageName = $request->image->store('public/category_images');
                    $image->move($destinationPath, $imageName);
            }

            $post =new ServiceCategory;

            $post->service_cat_name = [$language => $request->CategoryName];
//            $post->service_cat_description = [$language => $request->CategoryDesc];
            $post->service_cat_image = $imageName;
            $post->service_cat_slug = [$language => 'Test'];
//            $post->meta_title = [$language => $request->MetaTitle];
//            $post->meta_keyword = [$language => $request->MetaKeyword];
//            $post->meta_description = [$language => $request->MetaDescription];
            $post->service_price = $request->ServicePrice;
            $post->status = '1';

            $post->save();
            return redirect()->back()->with('successMessage','Register successfully');
//            return redirect()->back();
    }

    public function deleteServiceCategory($id){
        $service_cat = ServiceCategory::where('service_cat_id',$id)->delete();
        return redirect()->back();
    }

    public function updateServiceCategory($id){
        if (Session::has('locale')) {
            $language = $this->language = Session::get('locale');
        } else {
            $language = $this->language = app()->getLocale();
        }
        $service_cat = ServiceCategory::where('service_cat_id',$id)->get();
        return view('admin.update-service-category', ['service_cat' => $service_cat]);
    }

    public function updateServiceCatDetails(Request $request){

            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }

            $imageName = '';
            $service_cat_id = $request->service_cat_id;
            $destinationPath = public_path('images');

            if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $destinationPath = public_path('category_images');
                    $imageName = $request->image->store('public/category_images');
                    $image->move($destinationPath, $imageName);
                    // $imageName = '';
            }

            if($imageName != ''){
                $data = array(
                    'service_cat_name' => [$language => $request->CategoryName],
//                    'service_cat_description'=> [$language => $request->CategoryDesc],
                    'service_price' => $request->Price,
                    'status' => $request->Status,
                    'service_cat_image'=> $imageName,
                );
            }
            else{
                $data = array(
                    'service_cat_name' => [$language => $request->CategoryName],
//                    'service_cat_description'=> [$language => $request->CategoryDesc],
                    'service_price' => $request->Price,
                    'status' => $request->Status,
                );
            }
            $flg = ServiceCategory::find($service_cat_id)->update($data);
            return redirect()->back()->with('status','Update successfully');
    }

    public function updateServiceCat(){
        if (Session::has('locale')) {
            $language = $this->language = Session::get('locale');
        } else {
            $language = $this->language = app()->getLocale();
        }

        return view('admin.update-service-cat');
    }


    //------------Service Category----------------------//


    //----------------------Appointment-----------------------//


    public function viewAppointment(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointments = Appointments::all();
            $maids = Maid_profile::all();
            return view('admin.view-appointment',['appointments' => $appointments, 'Maid' => $maids]);
        }

    public function viewAppointmentStatus(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointments = Appointments::all();
            $maids = Maid_profile::all();
            return view('admin.view-appointment-status',['appointments' => $appointments, 'Maid' => $maids]);
        }

    public function viewAppointmentReport(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointments = Appointments::all();
            $maids = Maid_profile::all();
            return view('admin.view-appointment-report',['appointments' => $appointments, 'Maid' => $maids]);
        }

    public function viewAppointmentStatusReport(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointments = Appointments::all();
            $maids = Maid_profile::all();
            return view('admin.view-appointment-status-report',['appointments' => $appointments, 'Maid' => $maids]);
        }

    public function downloadReport()
    {
        if (Session::has('locale')) {
            $language = Session::get('locale');
        } else {
            $language = app()->getLocale();
        }
        $appointments = Appointments::all();
        $maid_data = Maid_profile::all();
        $data = ['title' => 'Dial4Maid'];
        $pdf = PDF::loadView('admin.appointment-report',compact('appointments','maid_data'));
        return $pdf->download('Dial4Maid.pdf');
    }
    public function downloadStatusReport()
    {
        if (Session::has('locale')) {
            $language = Session::get('locale');
        } else {
            $language = app()->getLocale();
        }
        $appointments = Appointments::all();
        $maid_data = Maid_profile::all();
        $data = ['title' => 'Dial4Maid'];
        $pdf = PDF::loadView('admin.appointment-status-report',compact('appointments','maid_data'));
        return $pdf->download('Dial4Maid.pdf');
    }


    public function updateAppointment($id){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointment = Appointments::where('id',$id)->get();
            $maids = Maid_profile::all();
            return view('admin.update-appointment',['appointments' => $appointment, 'Maid' => $maids]);
        }

    public function updateAppointmentDetails(Request $request){
            $apt_id = $request->apt_id;
            $maid_id = $request->Maid_ID;
//            echo "Hii";
//            echo $maid_id;
//            echo $apt_id;
//            die;

            $data = array(
                    'maid_id' => $maid_id,
                );
            $flg = Appointments::find($apt_id)->update($data);
//            echo "<pre>";
//            print_r($flg);
//            die;
            return redirect()->back()->with('successMessage','Update successfully');
        }

//    public function deleteAppointment($id){
//        $appointment = Appointments::where('id',$id)->delete();
//        return redirect()->back();
//    }
    public function deleteAppointment($id){
        $appointment = Appointments::where('id',$id)->delete();
        return redirect()->back();
    }
    public function updateAppointmentStatus(Request $request){

            $apt_id = $request->apt_id;

            $data = array(
                    'status' => $request->apt_status,
                );
            $flg = Appointments::find($apt_id)->update($data);
//            echo "<pre>";
//            print_r($flg);
//            die;
            return redirect()->back()->with('status','Update successfully');
    }

    //----------------------Appointment-----------------------//


   //-----------------------Users---------------------------//

    public function viewUsers(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $users = User_profile::all();
            return view('admin.view-users', ['users' => $users]);
        }

    public function addNewUsers(){
            if(Session::has('locale') ){
                $this->language = Session::get('locale');
            }
            else{
                $this->language = app()->getLocale();
            }
            return view('admin.add-users');
        }

    protected function userCreate(Request $request)
        {
            $this->Validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'code' => 'required',
                'service' => 'required|string',
            ]);

           $user = User::create([
               'name' => $request['name'],
               'email' => $request['email'],
               'password' => Hash::make($request['password']),
           ]);

           $id = $user->id;


           User_profile::create([
               'id' => $id,
               'name' => $request['name'],
               'email' => $request['email'],
               'contact' => $request['contact'],
               'address' => $request['address'],
               'address' => $request['address'],
               'client_type' => $request['client_type'],
               'source_call' => $request['source_of_call'],
               'crew_name' => $request['crew_name'], 
               'date' => $request['date'], 
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
               'code'=>$request->code,
               'service'=>$request->service
           ]);

           $id = $user->id;
           $verifyUser = VerifyUser::create([
            'user_id' => $id,
            'token' => str_random(40)
            ]);
            // \Mail::to($user->email)->send(new VerifyMail($user));
            //return $user;
            return redirect()->back()->with('successMessage','Register successfully',['user' => $user]);

           //return redirect()->back()->with('successMessage','Register successfully');
        }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->settings) {
                $verifyUser->user->settings = 1;
                $verifyUser->user->save();
                $status = "Your e-mail is verified. You can now login.";
            }else{
                $status = "Your e-mail is already verified. You can now login.";
            }
        }else{
           // return redirect('/admin/add-users')->with('successMessage', "Sorry your email cannot be identified.");
        }

        //return redirect('/admin/add-users')->with('successMessage', $status);
    }
/*end 01-08-19*/

      public function updateUser($id){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $user = User_profile::where('id',$id)->get();
            return view('admin.update-user', ['users' => $user]);
        }

    public function updateUserProfile(Request $request){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }

            $this->Validate($request, [
                'name' => 'required|string|max:255',
//                'email' => 'required|string|email|max:255|unique:admins',
                'phone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'pin_code' => 'required',
                'user_id' => 'required',
            ]);

            $id = $request->user_id;
            $data_profile = array(
                'id' => $id,
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pin_code' => $request->pin_code,
            );

            $user = User_profile::find($id)->update($data_profile);
            return redirect()->back()->with('status','Save successfully');
        }

    public function deleteUsers($id){
            $user_profile = User_profile::where('id',$id)->delete();
            $user = User::where('id',$id)->delete();
            return redirect()->back();
        }

    //-----------------------Users---------------------------//

               //-----------------------Maids---------------------------//

     public function viewMaids(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $maids = Maid_profile::all();
            return view('admin.view-maids', ['maids' => $maids]);
       //     return view('admin.view-maids');
        }

    public function addNewMaids(){
            if(Session::has('locale') ){
                $this->language = Session::get('locale');
            }
            else{
                $this->language = app()->getLocale();
            }
            return view('admin.add-maids');
        }

    protected function maidCreate(Request $request)
        {

            $this->Validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            $maids = Maids::create([
               'name' => $request['name'],
               'email' => $request['email'],
               'password' => Hash::make($request['password']),
           ]);

            $id = $maids->id;
           Maid_profile::create([
               'user_id' => $id,
               'name' => $request['name'],
               'email' => $request['email'],
               'contact' => $request['contact'],
               'address' => $request['address'],
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s')
           ]);

           return redirect()->back()->with('successMessage','Register successfully');
        }



    public function updateMaid($id){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $maid = Maid_profile::where('id',$id)->get();
            return view('admin.update-maid', ['maids' => $maid]);
        }
    public function updateMaidProfile(Request $request){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }

            $this->Validate($request, [
                'name' => 'required|string|max:255',
//                'email' => 'required|string|email|max:255|unique:admins',
                'contact' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'pin_code' => 'required',
                'maid_id' => 'required',
            ]);

            $id = $request->maid_id;
            $data_profile = array(
                'id' => $id,
                //'name' => $request->name,
                //'email' => $request->email,
                'contact' => $request->contact,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'pin_code' => $request->pin_code,
            );

            $maid = Maid_profile::find($id)->update($data_profile);
            return redirect()->back()->with('status','Save successfully');
        }
        public function deleteMaids($id,$user_id){
            $maid_profile = Maid_profile::where('id',$id)->delete();
            $maid = Maids::where('id',$user_id)->delete();
            return redirect()->back();
        }

    //-----------------------Maids---------------------------//

        //-----------------------Maids Schedul---------------------------//

     public function viewMaidsSchedul(){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $maids = appointments::all();
            return view('admin.view-maids-schedule', ['maids' => $maids]);
        }

    public function addNewMaidsSchedul(){
            if(Session::has('locale') ){
                $this->language = Session::get('locale');
            }
            else{
                $this->language = app()->getLocale();
            }
            return view('admin.add-maids-schedul');
        }

//    protected function maidCreateSchedul(Request $request)
//        {
//
//            $this->Validate($request, [
//                'name' => 'required|string|max:255',
//                'email' => 'required|string|email|max:255|unique:users',
//                'password' => 'required|string|min:6|confirmed',
//            ]);
//
//           $maid = User::create([
//               'name' => $request['name'],
//               'email' => $request['email'],
//               'password' => Hash::make($request['password']),
//           ]);
//
//           $id = $maid->id;
//           User_profile::create([
//               'id' => $id,
//               'name' => $request['name'],
//               'email' => $request['email'],
//               'created_at' => date('Y-m-d H:i:s'),
//               'updated_at' => date('Y-m-d H:i:s')
//           ]);
//
//           return redirect()->back()->with('successMessage','Register successfully');
//        }

     public function updateMaidSchedul($id){

            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $appointment = appointments::where('id',$id)->get();
            $maids1 = Maids::all();
            return view('admin.update-maid-schedule', ['maids' => $appointment],['maids1' => $maids1]);
        }




    //-----------------------Maids Schedul---------------------------//



    //-----------------------Settings---------------------------//

    public function updateSetting(){
        if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
        return view('admin.setting');
    }

    public function updateSettingDetails(Request $request){
            if (Session::has('locale')) {
                $language = $this->language = Session::get('locale');
            } else {
                $language = $this->language = app()->getLocale();
            }
            $id = Auth::user()->id;
            $this->Validate($request, [
                'password' => 'required|string|min:6|confirmed',
            ]);
            $data = array(
                'password'=> Hash::make($request->password),
            );
            $flg = Admin::find($id)->update($data);
            return redirect()->back()->with('status','Settings Save successfully');
    }

    //-----------------------Settings---------------------------//


}
