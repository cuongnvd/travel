
@extends('admin_layout')
@section('addusers')

<p>
	<h1>Thêm người dùng</h1>
</p>
<br/>

<form action="themnguoidung_submit.php" method="GET">
			<table width="90%" style="margin-top: 200px">
				
				<tr>
					<td style="text-align: left; width: 100px">Name</td>
					<td><input type="text" id="name" name="name" placeholder="Nhập tên của bạn..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px">Email</td>
					<td><input type="text" id="name" name="email" placeholder="Nhập Email..."></td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px">Password</td>
					<td>
						<div class="input-box">
						<input type="password" id="name" name="password" placeholder="Nhập Password..." >
						</div>
					</td>
				</tr>
				<tr>
					<td style="text-align: left; width: 100px">Confirm Password</td>
					<td>

						<div class="input-box">
						<input type="password" id="name" name="repassword" placeholder="Nhập lại Password..."></td>
						</div>
				</tr>
				<!-- <tr>
					<td style="text-align: left;">Role</td>
					<td><select name="loaitour">
					<option value=”0″>--------</option>
					<option>Khách hàng</option>
					<option>Admin</option>
					</select></td>
				</tr>
				
				
				t chưa thêm cái role -->
				
				
							
				
				<tr>
					<th class="ok" colspan="2"> <input type="submit" name="submit" value="Thêm người dùng"></th>
				</tr>
				

			</table>
		</form>

		@endsection('')