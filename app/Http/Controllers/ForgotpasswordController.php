<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestResetPassword;
use App\Models\User;
use Carbon\Carbon;
use Mail;
class ForgotpasswordController extends Controller
{
   public function getFormResetPassword()
   {
   		return view('quenmatkhau');
   }

    public function SendCodeResetPassword (Request $request){
        $email = $request->email;
        $checkUser = User::where('email',$email)->first();
        if(!$checkUser)
        {
            return redirect()->route('quenmatkhau')->with('message','Email không tồn tại');
        }

        $code = bcrypt(md5(time(),$email));

        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('resetpassword',['code' => $checkUser->code, 'email' => $email]);

        $data = [
        	'route' => $url
        ];
       

        Mail::send('mail', $data, function($message) use ($checkUser){
        	$message->to($checkUser->email,'Visitor')->subject('Lấy lại mật khẩu');
        });

         return redirect()->route('quenmatkhau')->with('message','Đã gửi link reset password tới email của bạn');

    }
    public function resetPassword(Request $request){
    	$code = $request->code;
    	$email = $request->email;

    	$checkUser = User::where(
    		[
    			'code' => $code,
    			'email' => $email,
    		])->first();

    	if(!$checkUser)
    	{
    		return redirect('/')->with('danger', 'Xin lỗi ! Đường dẫn lấy lại mật khẩu không đúng, bạn vui lòng thử lại sau.');
    	}


    	return view('resetpassword');
    }

    public function saveResetPassword(RequestResetPassword $RequestResetPassword){
    	if($RequestResetPassword->password){

    		$code = $RequestResetPassword->code;
    		$email = $RequestResetPassword->email;
    		$checkUser = User::where(
    		[
    			'code' => $code,
    			'email' => $email,
    		])->first();

    		if(!$checkUser){
    			return redirect('/')->with('danger', 'Xin lỗi ! Đường dẫn lấy lại mật khẩu không đúng, bạn vui lòng thử lại sau.');
    		}

    		$checkUser->password = bcrypt($RequestResetPassword->password);
    		$checkUser->save();

    		return redirect()->route('admin_login')->with('message','Mật khẩu đã được đổi thành công, mời bạn đăng nhập');
    	}

    }
}
