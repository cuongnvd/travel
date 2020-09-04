@extends('admin_layout')
@section('themtour')


<h1>Thêm tour</h1>


<form action="{{URL::to('/save-category-tour')}}" method="post">
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
			<table width="90%">
				
				<tr>
					<td style="text-align: left; width: 200px;">Tên tour</td>
					<td><input type="text" id="name" name="name_of_tour" placeholder="Nhập tên của tour..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Giá tour</td>
					<td><input type="text" id="cost" name="cost" placeholder="Nhập giá tour..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Ngày bắt đầu tour</td>
					<td><input type="date" id="name" name="the_start_day" placeholder="Nhập họ và tên..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Ngày kết thúc tour</td>
					<td><input type="date" id="name" name="the_end_day" placeholder="Nhập họ và tên..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Số ngày</td>
					<td><input type="number" id="songay" name="day_of_number" placeholder="Nhập số ngày..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Số đêm</td>
					<td><input type="number" id="sodem" name="number_of_night" placeholder="Nhập số đêm..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Số chỗ </td>
					<td><input type="number" id="socho" name="seats_of_number" placeholder="Nhập số chỗ..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Nội dung</td>
					<td><textarea style="resize: none;" type="text" cols="146" rows="10" name="content" id="ghichu"  placeholder=" Nhập nội dung..." ></textarea></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Hình ảnh</td>
					<td><input type="file" id="name" name="images" placeholder="Nhập giá tour..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 200px;">Id oại tour </td>
					<td><select name="types_of_tour_id">
					<option value=”0″>--------</option>
					<option value="1">Trong nước</option>
					<option value="2">Nước ngooài</option>
					</select></td>
				</tr>
				
				<tr>
					<td style="text-align: left; width: 200px;">Loại in out</td>
					<td><select name="type_in_out">
					<option value=”0″>----Chọn loại ----</option>
					<option value="1">Trong nước</option>
					<option value="2">Nước ngooài</option>
					</select></td>
				</tr>
						
						<tr>
					<td style="text-align: left; width: 200px;">Địa điểm khởi hành</td>
					<td><input type="text"  name="place_of_departure" placeholder="Nhập địa điểm khởi hành..."></td>
				</tr>


				<tr>
					<td style="text-align: left; width: 200px;">Ghi chú </td>
					<td><textarea type="text" cols="146" rows="10" name="note" id="ghichu"  placeholder=" Nhập ghi chú..." ></textarea> </td>
				</tr>
				<tr>
					<th class="ok" colspan="2"> <input type="submit" value="Thêm tour" name="add_category_tour"></th>
				</tr>
				

			</table>
		</form>

@endsection('')