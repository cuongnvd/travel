<base href="{{ asset('') }}">

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Chào {{ $names }}</h1>
	
	<p style="height: 50px; width: 50%; background:#A9F5BC ; color: #088A4B; line-height: 50px; border-radius: 20px; text-align: center;">
		<b> Bạn đã đặt tour thành công. </b>

	</p>
	<p>
		Vui lòng thanh toán trong 48h kể từ lúc đặt tour, nếu không đơn đặt tour của bạn sẽ bị hủy.
	</p>
	<p>
		Sau khi nhận được thông báo thanh toán từ bạn, chúng tôi sẽ tiến hành xác nhận đơn đặt tour của bạn.
	</p>
	<p>
		Cảm ơn bạn đã tin tưởng sử dụng dịch vụ của chúng tôi. Xin chân thành cảm ơn.
	</p>
	
	<br />
	<br />
	<table width="100%" border="1" cellspacing="0">
		<tr>
			<th>
				Tên tour
			</th>
			<th>
				Số chỗ đặt
			</th>
			<th>
				Số điện thoại người đặt
			</th>
			<th>
				Ngày khởi hành
			</th>
			<th>
				thời gian của tour
			</th>
			<th>
				Địa điểm khởi hành
			</th>
			<th>
				Thành tiền
			</th>
		</tr>
		<tr>
			<th>
				<b style="color: red">{{ $name_of_tour }}</b>
			</th>
			<th>
				<b style="color: red">{{ $seats_of_number }}</b>
			</th>
			<th>
				<b style="color: red">{{ $phone_number }}</b>
			</th>
			<th>
				 <b style="color: red">{{ $the_start_day }}</b>
			</th>
			<th>
				<b style="color: red">{{ $day_of_number }} Ngày {{ $number_of_night }} Đêm </b>
			</th>
			<th>
				 <b style="color: red"> {{ $place_of_departure }} </b>
			</th>
			<th>
				<b style="color: red"> {{ $tong }} </b>
			</th>
		</tr>
	</table>
	
	<p>
		* hướng dẫn thanh toán. Click <a href="/hotrothanhtoan">vào đây</a> để xem hướng dẫn.
	</p>
	<h3>
		bạn muốn đặt tour cho kì nghỉ của mình.
	</h3>
	<p>
		<a href="/alltourtrongnuoc">Tour trong nước</a> 
	</p>
	<p>
		<a href="/alltournuocngoai">Tour nước ngoài</a>
	</p>
</body>
</html>