
@extends('master')
@section('admin_login')



<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý Admin w</title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
   
	<style type="text/css">
        .login-form{
    width: 100%;
    height: 350px;
    max-width: 600px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 15px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
 
}
h1{
    color: red;
    
    margin-bottom: 30px;
}
.input-box{
    margin-bottom: 10px;
}
.input-box input{
    padding: 7.5px 15px;
    width: 90%;
    font-size: 20px;
    border: 1px solid #cccccc;
    outline: none;
}
.btn-box{
    text-align: center;
    
}
.btn-box button{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    outline: none;
 font-size: 20px;

}

.btn-box button:hover {
    background: #45a049;

}

#dangky{
    margin-top: 30px;
    font-size: 20px;

}

#dangky a{
    color: red;

}






	</style>




















    

</head>
<body>
		<div class="container">
            <div class="login-form">



                <form action="{{route('post.login')}}" method="post">
                     {{ csrf_field('') }}
                        
                        <h1 style="text-align: center;">Đăng nhập</h1>
                        <p style="font-size: 20px; color: red">
                        <?php
                            $message = Session::get('message');
                            if($message)
                            {
                            echo $message;
                            Session::put('message',null);
                            }
                            ?> 
                           </p>
            @if($errors->any())
             <p>
                @foreach($errors->all() as $error)
                <strong style="color: red">
                    {{ $error }} <br /> <br />
                </strong>
                @endforeach
             </p>
            @endif 
                           <br />
                   
                    <div class="input-box">
                        <i ></i>
                        <input type="text" name="email" required="1" placeholder="Nhập email">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" name="password" required="1" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            Đăng nhập
                        </button>
                    </div>
                    <div id="dangky">
                        <p>
                            Chưa có tài khoản? <a href="{{route('dangky')}}" style="color: red; text-decoration: none; ">đăng ký</a> ngay
                        </p>
                        <br />
                        <p>
                            Quên mật khẩu? <a href="{{route('quenmatkhau')}}" style="color: red; text-decoration: none; ">Lấy lại mật khẩu</a>
                        </p>
                    </div>
                </form>



            </div>
            </div>


    </div>
</body>
</html>
@endsection