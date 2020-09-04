@extends('admin_layout')
@section('themtour')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.body-add{
			width: 100%;
			height: 2000px;

		}
		.body-tour{
			width: 100%;
			height: 1500px;
		
			padding-bottom: 10%;
		}

	</style>
</head>
<body>



<div class="body-add">
	<div class="body-tour">
			<form action="{{route('tour.save')}}" method="post">
					{{ csrf_field()}}
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
		                    {{ $error }} <br /> <br />
		                </strong>
		                @endforeach
		             </p>
		            @endif 
						<table width="90%">
							<tr>
								<th></th>
								<th><h1>Thêm tour</h1></th>
							</tr>
							<tr>
								<th></th>
							</tr>
							
							<tr>
								<td style="text-align: left; width: 200px;">Tên tour</td>
								<td><input type="text" id="name" required="1" name="name_of_tour" placeholder="Nhập tên của tour..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Giá tour</td>
								<td><input type="text" id="cost" required="1" name="cost" placeholder="Nhập giá tour..."></td>
							</tr>
							
							<tr>
								<td style="text-align: left; width: 200px;">Ngày bắt đầu tour</td>
								<td><input type="date" id="name" required="1" name="the_start_day" placeholder="Nhập họ và tên..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Ngày kết thúc tour</td>
								<td><input type="date" id="name" required="1" name="the_end_day" placeholder="Nhập họ và tên..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Số ngày</td>
								<td><input type="number" id="songay" required="1" name="day_of_number" placeholder="Nhập số ngày..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Số đêm</td>
								<td><input type="number" id="sodem" required="1" name="number_of_night" placeholder="Nhập số đêm..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Số chỗ </td>
								<td><input type="number" id="socho" required="1" name="seats_of_number" placeholder="Nhập số chỗ..."></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Nội dung</td>
								<td><textarea style="resize: none;" required="1" type="text" cols="146" rows="10" name="content" id="editor1"  placeholder=" Nhập nội dung..." ></textarea></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Hình ảnh</td>
								<td><input type="file" id="name" required="1" name="images" ></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Hình ảnh2</td>
								<td><input type="file" id="name" required="1" name="images1" ></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Hình ảnh3</td>
								<td><input type="file" id="name" required="1" name="images2" ></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Id loại tour </td>
								<td><select name="types_of_tour_id" required="1">
							
								<option value="1">Trong nước</option>
								<option value="2">Nước ngooài</option>
								</select></td>
							</tr>
							
							<tr>
								<td style="text-align: left; width: 200px;">Loại in out</td>
								<td><select name="type_in_out" required="1">
								<option value="0">Trong nước</option>
								<option value="1">Nước ngooài</option>
								</select></td>
							</tr>
							<tr>
								<td style="text-align: left; width: 200px;">Tour nổi bật </td>
								<td><select name="specialtour" required="1">
								<option value="0">Tour thường</option>
								<option value="1">Tour nổi bật</option>
								</select></td>
							</tr>

							<tr>
								<td style="text-align: left; width: 200px;">Địa điểm khởi hành </td>
								<td><input type="text"  required="1" name="place_of_departure" placeholder="Nhập địa điểm khởi hành..." style="margin-left: -30px"></td>
							</tr>
										
							<tr>
								<td style="text-align: left; width: 200px;">Ghi chú </td>
								<td><textarea style="resize: none;" type="text" cols="146" rows="10" name="note" id="ghichu" required="1"  placeholder=" Nhập ghi chú..." ></textarea> </td>
							</tr>
							<tr>
								<th class="ok" colspan="2"> <input type="submit" value="Thêm tour" name="add_category_tour"></th>
							</tr>
						

						</table>	

					</form>
	</div>
</div>
</body>
</html>

@endsection('')