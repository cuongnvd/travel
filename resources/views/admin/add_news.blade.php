@extends('admin_layout')
@section('addnews')



<p>

</p>
<br />&emsp;&emsp;&emsp;&emsp;
<p style="color: red;">
							<?php
                            $message = Session::get('message');
                            if($message)
                            {
                            echo $message;
                            Session::put('message',null);
                            }
                            ?> 
                            </p>


<form action="{{route('news.save')}}" method="post">
	{{ csrf_field()}}

	
			<table width="90%" >
				<tr>
					<th></th>
					<th>	<h1>Thêm tin tức</h1></th>
				</tr>
				<tr>
					<th></th>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px;">Tiêu đề</td>
					<td><input type="text" required="1" id="name" name="title" placeholder="Nhập tiêu đề..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px;">Hình ảnh1</td>
					<td ><input type="file"  required="1" id="name" name="images" ></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px;">Hình ảnh2</td>
					<td ><input type="file" required="1" id="name" name="images1" ></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px;">Hình ảnh3</td>
					<td ><input type="file" required="1" id="name" name="images2" ></td>
				</tr>
				
				<tr>
					<td style="text-align: left; width: 100px;">Ngày gửi</td>
					<td><input type="date" required="1" id="name" name="sent_date" ></td>
				</tr>
				
				<tr>
					<td style="text-align: left; width: 100px;">Nội dung</td>
					<td><textarea style="resize: none; " type="text" cols="146" rows="50"  id="editor1"  name="content" required="1" placeholder=" Nhập nội dung..." ></textarea></td>
				</tr>
				
				
							
				
				<tr>
					<th class="ok" colspan="2"> <input type="submit" name="add_news" value="Thêm tin"></th>
				</tr>
				

			</table>
			</form>



			@endsection('')