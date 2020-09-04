<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Requests;
use App\Models\User;
use App\Models\News;
use App\Models\categoryTour;
use App\Models\Order_Tours;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Redirect;
//session_start();
class AdminController extends Controller
{	
	//show giao dien dang nhap admin
    public function index(){
    	return view('admin_login');
    	}
    //show giao dien quan ly web admin
    public function show_dashboard(){
       
        $conTact = Contact::all()->count();
        $orderTour = Order_Tours::all()->count(); //in ra count đặt tour
        $users = User::all()->count();  //in ra count user
        $news = News::all()->count();  //in ra count news
        $categoryTour = categoryTour::all()->count(); //in ra count tour
    	return view('admin.dashboard',compact(['users','news','categoryTour','orderTour','conTact']));
    	}

    //dang nhap
    public function login(Request $request){

     
       $credentials = $request->only('email', 'password');
        // print_r($credentials);die;
        if (!Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->back()->with('message', 'Đăng nhập không thành công');
        }

        return redirect()->route('dashboard');
    }





    //out tai khoan
      public function logout(){
    	Session::put('name',null);
    		Session::put('id',null);
    			return Redirect::to('admin_login');
    }

   
    

}
