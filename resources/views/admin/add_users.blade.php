
@extends('admin_layout')
@section('addusers')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.thongbao{
			width: 100%;
			line-height: 23px;
			height: 200px;

		}
		.nhap{
			width: 100%;
			
		}
	</style>
</head>
<body>
	<div class="thongbao">
		<p>
	<h1>Thêm người dùng</h1>
	<p style="color: red">
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
	               {{ $error }} <br />
	             </strong>
	        @endforeach
	    </p>
    	@endif 
</p>
	</div>

<div class="nhap">
<form action="{{URL::to('/save-users')}}" method="post">
	{{ csrf_field()}}
		
			<table width="90%" >
				
				<tr>
					<td style="text-align: left; width: 100px;">Name</td>
					<td><input type="text" required="1" name="name"  placeholder="Nhập tên của bạn..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px">Email</td>
					<td><input type="text" required="1"  name="email" placeholder="Nhập Email..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px">Password</td>
					<td>
						<div class="input-box">
						<input type="password" required="1" name="password" placeholder="Nhập Password..." style="height: 40px; width: 400px">
						</div>
					</td>
				</tr>
				<tr>
					<td style="text-align: left; width: 150px">Password Confirm</td>
					<td style="text-align:center; ">
						<div class="input-box">
						<input type="password" required="1" name="passwordAgain" placeholder="Nhập Password..." style="height: 40px ; width: 400px">
						</div>
					</td>
				</tr>
				<tr>
					<th></th>
				</tr>
				
				<tr>

					<th class="ok" colspan="2"> <input type="submit" name="add_users" value="Thêm người dùng"></th>
				</tr>
				

			</table>
		</form>

		</div>
</body>
</html>

		@endsection('')