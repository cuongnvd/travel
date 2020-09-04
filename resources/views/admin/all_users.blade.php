@extends('admin_layout')
@section('allusers')

<style type="text/css">
	.pagination li{
		list-style: none;
		float: left;
		margin-left: 50px;

		color: red;
	}
	.body{
		width: 100%;
		height: 1000px;

	}
	.add{
		width: 10%;
		height: 50px;
		
		margin-left: 10px;
	}
	.click{
		width: 150px;
		height: 50px;
		font-size: 20px;
	}
	.click:hover{
		background:pink;
	}
	.dele:hover{
		background: red;
		color: white;
	}
	.dele{
		border-radius: 10px;
	}
	.rolechange:hover{
		background:pink;
	}
	.rolechange{
		border-radius: 10px;
	}
	.changepass:hover{
		background: pink;
	}
	.changepass{
		border-radius: 10px;
		height: 30px;
	}
</style>
<div class="body">
	<div>
		<h1>DANH SÁCH NGƯỜI DÙNG</h1>
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
<div class="add">
	<button class="click">
	<a href="{{route('users.add')}}" ><strong> Thêm User <i class="fa fa-plus " aria-hidden="true"></i></strong></a>
	</button>
</div>    
<table border="1" width="100%" cellspacing="0">
	<tr>
		 <!-- <th width="10%" style="background: #BDBDBD">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
 -->		<th width="10%" style="background: #BDBDBD">Id</th>
		<th width="25%" style="background: #BDBDBD">name</th>
		<th width="30%" style="background: #BDBDBD">email</th>
		<th width="10%" style="background: #BDBDBD">role</th>
		<th width="10%" style="background: #BDBDBD">Change Password</th>
		<th width="16%" style="background: #BDBDBD">Option</th>
	</tr>

	@foreach($users as $row)
	@php
		$role_user = 'user';
		if($row->role == true)
			$role_user = 'admin';
	@endphp
	<tr>
		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->

		<th>{{$row->id}}</th>
		<th>{{$row->name}}</th>
		<th>{{$row->email}}</th>
		<th style="color: red">{{$role_user}}</th>
		<th style="color: red"> <a href="{{route('password.edit',['id'=>$row->id])}}" > <button type="submit" class="changepass"> Change</button></a> </th>
		 

		<th><a href="{{route('users.edit',['id'=>$row->id])}}" style="color: blue"> <button type="submit" class="rolechange">Change role</button></a>
			<form method="POST" action="/admin/users/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="dele">Delete</button>
                </form>
		</th>
			&ensp;
	

	
	</tr>
	@endforeach


</table>
<strong>{!! $users->links() !!} </strong> 

</div>
</div>

	


@endsection('')