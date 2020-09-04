<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;
use Mail;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//session_start();
use App\Models\User;
// use Illuminate\Support\Users;

class UsersController extends Controller
{
    public function add_users(){

    	return view('admin.add_users');
    }
    public function all_users(){
        
    
    	 $users = User::select('id','name','email','role')->orderBy('id','DESC')->paginate(10);
        // print_r($categoryTour);
    	return view('admin.all_users',compact('users'));
    }

    public function getSua($id){
    	$users = User::find($id);
    	return view('admin.sua',['users'=>$users]);
    }




    //them nguoi dung
  public function save_users(Request $request){

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
            
            

        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
             
        ],
       

        );

        $name = $request->name;
        $email = $request->email;
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);

        $users->save();
        
        Mail::send('mailregister',[
            'name' => $name,
            'email' => $email,
            
        ], function($mail) use($email,$name){
            $mail->to($email, $name);
            $mail->from('tourftravel@gmail.com');
            $mail->subject('Email Register');
        });



        
        return redirect()->back()->with('message', 'Đăng ký người dùng thành công');
        }




        //xoa nguoi dung
   public function destroy($id)
    {
        $users= User::find($id);

        $users->delete();
        return redirect()->action('UsersController@all_users')->with('message','xóa thành công.');
    }


    // sua nguoi dung
     public function edit($id)
    {
        $users = User::findOrFail($id);

        $pageName = 'Change Role';
        return view('/admin/all_users_update', compact('users', 'pageName'));
    }
     public function update(Request $request, $id)
    {

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email',
         
            
            

        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
           
            
           
             
        ],
       

        );


        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
       
        $users->role = $request->role;
        
       

        $users->save();
        return redirect()->action('UsersController@all_users')->with('message','Cập nhật thành công.');
    }

    public function passwordedit($id)
    {
        $users = User::findOrFail($id);

        $pageName = 'Change Password';
        return view('/admin/all_password_update', compact('users', 'pageName'));
    }
    public function updatepassword(Request $request, $id)
    {

        $this->validate($request,
        [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:3|max:30',
            'passwordAgain' => 'required|same:password',
            
            

        ],
        [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên nguơi dùng phải có ít nhất 2 kí tự',
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'mật khẩu phải có ít nhất 3 kí tự',
            'password.max' => 'mật khẩu chỉ được tối đa 30 kí tự',
            'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
             'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng',
             
        ],
       

        );


        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
       $users->password = bcrypt($request->password);
       
        
       

        $users->save();
        return redirect()->action('UsersController@all_users')->with('message','Cập nhật thành công.');
    }
  
  
}
   
