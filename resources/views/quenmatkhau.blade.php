

@extends('master')
@section('dangky')





<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="{{asset('css/dangky.css')}}">


</head>
<body>
		<div class="body">
            <div class="login-form">



                <form action=" {{ route('post.send')}}" method="post">
                    {{ csrf_field()}}
                    <h1 style="text-align: center;">Quên mật khẩu?</h1>
                        <p style="color: red; font-size: 20px">
                            <?php
                            $message = Session::get('message');
                            if($message)
                            {
                            echo $message;
                            Session::put('message',null);
                            }
                            ?> 
                            </p>
                  
                            <br />
                    <div class="input-box"> 
                      <input type="text" placeholder="Nhập email"  name="email">
                    </div>
 
                    <div class="btn-box">
                        <button type="submit" name="">
                            Lấy lại mật khẩu
                        </button>
                        <br />
                        
                    </div>
                    <br />
                    <br />
                   <p style="font-size: 20px">
                        Bạn đã có tài khoản? <a href="admin_login" style="color: red; text-decoration: none; ">đăng nhập</a> ngay
                   </p> 
                   <br />
                    <p style="font-size: 20px">
                        Chưa có tài khoản? <a href="{{route('dangky')}}" style="color: red; text-decoration: none; ">đăng ký</a> ngay
                    </p>
                </form>
            </div>
            </div>


    
</body>
</html>
@endsection