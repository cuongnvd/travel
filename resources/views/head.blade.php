<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		*{

	margin: 0;
	padding: 0;
	}


#head ul{
	list-style-type: none;
	background: black;
	text-align: center;
	font-size: 19px;
	height: 120px;
	height: 75px;
	padding-top: 5px;
	color: white;

}
#head ul li{
	color: white;
	display: inline-table;
	width: 140px;
	line-height: 40px;
	position: relative;
	text-align: center;

}



}
#head ul li a{
	color: white ;
	text-decoration: none;
	display: block;

}
#head a{
	margin-top: 10px;
	color: white;
	text-decoration: none;
}
#head ul li a:hover{
	color: blue;
	
}

#head ul li > .sub-head{
	display:none;
	position: absolute;/* lenh hien thi dropdown list*/

	}
#head ul li:hover .sub-head{
	display: block;

}
#head1{
			width: 100%;
			height: 150px;
			background: black;
			text-align: center;
			margin: center;
			list-style-type: none;

		}
		.search{
			width: 100%;
			height: 60px;
		
	background: black;
		}
		.search1{
			width: 40%;
			background: black;
			height: 50px;
			float: left;
			margin-left: 30%;
			border-radius: 15px;

		}
		
		
		.search2{
			width: 20%;
			height: 50px;
			background: black;
			margin-left: 70%;
		}
		.tim{
			width: 99%;
			height: 46px;
			border-radius: 15px;
			outline: none;
		}
		.tim:hover{
			background: #D8D8D8;
		}
		.check{
			width: 30%;
			height: 50px;
			border-radius: 15px;
			outline: none;

		}
		.check:hover{
			background: #BDBDBD;

		}

		b{
				color: blue;
		}


	</style>
</head>
<body>

<div >
<div id="head1">
		<li> <a href="{{route('index')}}"><img src="/images/logo2.PNG" height="150px" width="150px" style="margin: center;" > </a></li>	
</div>


<div id="head">
		
    	<ul>
    		
    		
			<li><a href="{{route('index')}}">Giới thiệu</a></li>

			<li><a href="{{route('tourchongoi')}}">Tour</a></li>

			<li><a href="{{route('diemdulich')}}">Tin tức</a></li>
	
			
			<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
			<!-- <li><a href="#">Ngôn ngữ</a>
				<ul class="sub-head" >
		        <li><a href="#">Tiếng Việt</a></li>
		        <li><a href="#">Tiếng Anh</a></li>
      			</ul>
			</li> -->
			<li><a href="#"> Tài khoản <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
			<ul class="sub-head">
		        <li><a href="{{route('admin_login')}}">Đăng nhập</a></li>
		        <li><a href="{{route('dangky')}}">Đăng ký</a></li>
      			</ul>
      		</li>
      		<!-- <li>
      			<a href="">
      			@if(Auth::check())
					<b style="color: white">
						{{Auth::user()->name}}
					</b>
					@endif
				</a>
				<ul class="sub-head">
					<li><a href="">Thông tin </a> </li>
					<li><a href=""> Đăng xuất </a></li>
				</ul>
      		</li> -->
      		
			
		</ul>

</div>
<div class="search">
	<form action="{{route('timkiem')}}" method="GET">
		
		<div class="search1">
			<input type="text" id="tentour" name="tukhoa" placeholder="   tìm kiếm tour..." class="tim">
		</div>
		<div class="search2">
			<input type="submit" class="check">
		</div>
	</form>
</div>

</div>
</body>
</html>