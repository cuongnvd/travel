

@extends('master')
@section('dangky')





<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
     <style type="text/css">
         
.body{
    height: 700px;
}


.login-form{
    width: 100%;
    height: 600px;
    max-width: 600px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 20px;
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
    padding-top: 20px;
    
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
		<div class="body">
            <div class="login-form">



                <form action="{{URL::to('/save-users')}}" method="post">
                    {{ csrf_field()}}
                    <h1 style="text-align: center;">Đăng Ký </h1>
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
                       
                      <input type="text" placeholder="Nhập tên người dùng" name="name">
                    </div>
                    <div class="input-box">
                       
                      <input type="text" placeholder="Nhập email" name="email">
                    </div>
                    <div class="input-box">
                       
                      <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="input-box">
                       
                      <input type="password" placeholder="Nhập lại mật khẩu" name="passwordAgain">
                    </div>
                   

                    

                    

                    <!-- <div class="input-box">
                       
                      <input type="text" placeholder="Nhập số điện thoại">
                    </div> -->
                    <div class="btn-box">
                        <button type="submit" name="add_users">
                            Đăng Ký
                        </button>
                        <br />
                        
                    </div>
                    <br />
                    <br />
                   <p style="font-size: 20px">Bạn đã có tài khoản? <a href="admin_login" style="color: red; text-decoration: none; ">đăng nhập</a> ngay</p> 
                </form>
            </div>
            </div>


    
</body>
</html>
@endsection