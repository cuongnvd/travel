

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



                <form action="{{URL::to('/save-users')}}" method="post">
                    {{ csrf_field()}}
                    <h1 style="text-align: center;">Đặt lại mật khẩu mới </h1>
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
                       
                      <input type="text" placeholder="Nhập email" name="email">
                    </div>
                    <div class="input-box">
                       
                      <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="input-box">
                       
                      <input type="password" placeholder="Nhập lại mật khẩu" name="password">
                    </div>
                   

                    

                    

                    <!-- <div class="input-box">
                       
                      <input type="text" placeholder="Nhập số điện thoại">
                    </div> -->
                    <div class="btn-box">
                        <button type="submit" name="add_users">
                           Đặt lại mật khẩu
                        </button>
                        <br />
                        
                    </div>
                    <br />
                    <br />
                   
                </form>
            </div>
            </div>


    
</body>
</html>
@endsection