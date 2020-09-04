
@extends('master')
@section('thongbaodattour')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.bodythongbao{
			width: 100%;
			height: 300px;
			margin-top: 40px;
		}
	</style>
</head>
<body>
	<div class="bodythongbao">
		<p style="height: 50px; width: 50%; background:#A9F5BC ; color: #088A4B; line-height: 50px; border-radius: 20px; text-align: center; margin-left: 350px; font-size: 20px">
	
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
		<br />
		<p style="text-align: center;font-size: 20px;color: red; text-decoration: none">
			xem hướng dẫn thanh toán tại <a href="{{route('hotrothanhtoan')}}">đây</a>
		</p>
	</div>

</body>
</html>


@endsection