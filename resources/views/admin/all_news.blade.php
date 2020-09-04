@extends('admin_layout')
@section('allnews')
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
	.top{
		width: 100%;
		height: 500px;

	}
		.add{
		width: 10%;
		height: 50px;
		
		margin-left: 10px;
	}
	.click{
		width: 200px;
		height: 50px;
		font-size: 20px;
	}
	.click:hover{
		background:pink;
	}
	th img{
		max-width: 100px;
		max-height: 100px;
	}

</style>
 
<div class="body">
	<div class="top">
		<h1>DANH SÁCH TIN TỨC</h1>
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
<div class="add">
	<button class="click">
	<a href="{{route('news.add')}}" ><strong> Thêm tin tức <i class="fa fa-plus " aria-hidden="true"></i></strong></a>
	</button>
</div> 
<br />
<table border="1" width="100%" cellspacing="0">
	<tr>
		
		<th width="10%" style="background: #BDBDBD">Id</th>
		<th width="25%" style="background: #BDBDBD">Title</th>
		<th width="20%" style="background: #BDBDBD">images</th>
		<th width="20%" style="background: #BDBDBD">content</th>
		<th width="20%" style="background: #BDBDBD">Option</th>
	</tr>

	@foreach($news as $row )
	<tr>

		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->
		<th>{{$row->id}}</th>
		<th>{{$row->title}}</th>
		<th>

			<img src="{{ asset('images/'.$row->images )}}"  style="width: 150px; height: 150px ; padding-top: 5px">
			
		</th>

		<th >  {!! $row->content !!}  </th>
		<th><a href="{{route('news.edit',['id'=>$row->id])}}" style="color: blue"> <i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>|
			&ensp;

		
			<form method="POST" action="{{route('news.delete',['id'=>$row->id])}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

			
	</tr>
	@endforeach
</table>
<strong>{!! $listnewS->links() !!} </strong> 

</div>
</div>
@endsection('')