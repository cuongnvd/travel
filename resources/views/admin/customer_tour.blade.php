@extends('admin_layout')
@section('customertour')
<style type="text/css">
	.pagination li{
		list-style: none;
		float: left;
		margin-left: 50px;

		color: red;
	}


</style>
<h1>Danh sách tin tức</h1>

<table border="1" width="100%" cellspacing="0">
	<tr>
		
		<th width="10%" style="background: #BDBDBD">Id</th>
		<th width="25%" style="background: #BDBDBD">Title</th>
		<th width="10%" style="background: #BDBDBD">images</th>
		<th width="30%" style="background: #BDBDBD">content</th>
		<th width="16%" style="background: #BDBDBD">Option</th>
	</tr>


	<tr>

		<!-- <th><label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label></th> -->
		<th></th>
		<th></th>
		<th><img src=""  style="width: 150px; height: 150px ; padding-top: 5px"></th>

		<th></th>
		<th><a href="" style="color: blue"> <i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>|
			&ensp;

		
			<form method="POST" action="" onsubmit="return ConfirmDelete( this )">
                 
                    <button type="submit">Delete</button>
                </form>

			
	</tr>
	@endforeach
</table>
<strong>{!! $listNews->links() !!} </strong> 




@endsection('')