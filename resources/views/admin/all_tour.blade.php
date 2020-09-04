@extends('admin_layout')
@section('alltour')

<style type="text/css">
	.pagination li{
		list-style: none;
		float: left;
		margin-left: 20px;

		color: red;
	}
.body{
		width: 100%;
		height: 2000px;
	
		
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
	img{
		max-width: 200px;
		max-height: 200px;
	}
</style>
<div class="body">
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
	<div class="top">
		<h1>DANH SÁCH TOUR</h1>
<div class="add">
	<button class="click">
	<a href="{{route('tour.add')}}" ><strong> Thêm tour <i class="fa fa-plus " aria-hidden="true"></i></strong></a>
	</button>
</div> 
<br />
<table border="1" width="100%" cellspacing="0">
	<tr>
		
		<th width="10%" style="background: #BDBDBD">Id</th>
		<th width="25%" style="background: #BDBDBD">name_of_tour</th>
		<th width="10%" style="background: #BDBDBD">Cost</th>
		<th width="10%" style="background: #BDBDBD">Content</th>
		<th width="10%" style="background: #BDBDBD">Option</th>
	</tr>
	   @foreach($categoryTour as $row )
	<tr>
		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->
		<th>{{$row->id}}</th>
		<th style="padding-left: 20px; text-align: left;">{{$row->name_of_tour}}</th>
		<th>{{$row->cost}}</th>
		
		<th>{!! $row->content !!}</th>
		<th ><a href="{{route('tour.edit',['id'=>$row->id])}}" style="color: blue"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>|
			&ensp;
			<form method="POST" action="{{route('tour.delete',['id'=>$row->id])}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
	</tr>
		@endforeach

</table>

<strong>{!! $categoryTour->links() !!} </strong> 
</div>
</div>
@endsection('')