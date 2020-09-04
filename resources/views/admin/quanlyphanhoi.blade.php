@extends('admin_layout')
@section('quanlyphanhoi')
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


</style>
<div class="body">
	<div class="top">
<h1>Danh sách khách hàng liên hệ</h1>

<table border="1" width="100%" cellspacing="0">
	<tr>
		
		<th width="5%" style="background: #BDBDBD">Id</th>
		<th width="10%" style="background: #BDBDBD;">Name</th>
		
		<th width="15%" style="background: #BDBDBD">Email & Phone_number</th>
	
		<th width="5%" style="background: #BDBDBD">title</th>
		<th width="10%" style="background: #BDBDBD">content</th>
		<th width="10%" style="background: #BDBDBD">Tình trạng</th>
		<th width="10%" style="background: #BDBDBD">option</th>
	</tr>

	@foreach($conTact as $row )

	<tr>

		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->
		<th>{{$row->id}}</th>
		<th style="text-align: center;">{{$row->name}}</th>
		
		<th style="text-align: left;">{{$row->email}} {{$row->phone_number}}</th>
	
		<th style="text-align: center;">{{$row->title}}</th>
		<th style="text-align: left;">{{$row->content}}</th>
		<th style="text-align: center; color: red">{{$row->status}}</th>
		<th><a href="{{route('quanlyphanhoi.edit',['id'=>$row->id])}}" style="color: blue"> <i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a> </th>

        

			
	</tr>
	@endforeach

</table>
<strong>{!! $listContact->links() !!} </strong> 
</div>
</div>

@endsection('')