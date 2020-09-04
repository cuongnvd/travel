@extends('admin_layout')
@section('quanlydattour')
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
table{
	
}


</style>
<div class="body">
	<div class="top">
<h1>Danh sách đặt tour</h1>

<table border="1" width="100%" cellspacing="0">
	<tr>
		
		<th width="5%" style="background: #BDBDBD">Id</th>
		<th width="10%" style="background: #BDBDBD;">Names</th>
		
		<th width="15%" style="background: #BDBDBD;">Email & Phone_number</th>
	
	
		<th width="15%" style="background: #BDBDBD">Tên tour</th>
		<th width="10%" style="background: #BDBDBD">Số chỗ đặt</th>
		<th width="10%" style="background: #BDBDBD">Payments</th>
		<th width="10%" style="background: #BDBDBD">Tình trạng</th>
		<th width="10%" style="background: #BDBDBD">option</th>
	</tr>

	@foreach($orderTours as $row )

	<tr>

		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->
		<th>{{$row->id}}</th>
		<th style="text-align: left;">{{$row->names}}</th>
		
		<th style="text-align: left;">{{$row->email}} <br /> {{$row->phone_number}}</th>	
		<th style="text-align: left;">{{$row->name_of_tour}}</th>
		<th style="text-align: center;">{{$row->seats_of_number}}</th>
		<th style="color: #088A08">{{$row->payments}}</th>
		<th style="text-align: center; color: red">{{$row->status}}</th>
		<th><a href="{{route('quanlydattour.edit',['id'=>$row->id])}}" style="color: blue"> <i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a> </th>

        

			
	</tr>
	@endforeach

</table>
<strong>{!! $orderTours->links() !!} </strong> 
</div>
</div>



@endsection('')