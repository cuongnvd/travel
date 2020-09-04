

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#body{
			width: 100%;
			background: #E6E6E6;
			
		}
		.head{
			width: 100%;
			height: 100px;
			background:#D8D8D8;
		}
		.headleft{
			float: left;
		    
		    margin: 0;
		    margin-left: 50px;
		    padding: 1em;
		    
		}
		.headright ul{
				width: 100%;
				list-style-type: none;
				color: black;
				text-align: center;
				font-size: 19px;
				
				height: 300px;
				
				margin: 0;
				padding: 0;
				
		}
			.headright ul li{
	
				display: inline-table;

				line-height: 35px;
				position: relative;
				text-align: center;
				/*padding-top: 10px;*/
}

				.headright ul li a{

				width: 300px;
				color: black ;
				text-decoration: none;
				display: block;
				margin-left: -20px;
				font-size: 20px;
				font-weight: bold;
				text-align: left;
				margin-left: 1px;

				
			}
			.headright a{
				margin-top: -35px;
				


			}
			.headright ul li a:hover{
				
				/*background: pink;*/
			color: blue;

				
			}

			.headright ul li > .sub-head{
				display:none;
				position: absolute;/* lenh hien thi dropdown list*/

				}
			.headright ul li:hover .sub-head{
				display: block;

			}

		.headright{
			margin-left: 80%;
		  
		    text-align: center;
		    
		   
		    overflow: hidden;
		}
		.content{
			width: 100%;
	
			background: #E6E6E6;
			

		}
		.contentleft{
			

			float: left;
		    max-width: 100%;
		    margin: 0;
		   	padding: 1em;

		}
		.contentleft{
			background: white;
			color: black;
			float: left;
			width:300px;
			height: 600px;
			line-height: 70px;
			text-align: left;
			padding: 0;
		}
		.contentleft li {
			
			line-height: 50px;
			border-bottom: 3px solid #e8e8e8;
			list-style-type: none;
			margin-left: -30px;
		}
		.contentleft li a{

			text-decoration: none;
			color: black;
 			font-weight: bold;
  			display: block;
  			font-size: 20px;

		}
		.contentleft li a:hover{
				background: pink;
		}

		.contentleft ul li > .sub-contentleft{
				display:none;

			

				}
			.contentleft ul li:hover .sub-contentleft{
				display: block;


			}

		.contentright{
			
			margin-top: 2%;
			margin-left: 26%;
			padding-right: : 30%;
		 	background: white;
		 	width: 70%;
		    text-align: center;
	
		    line-height: 100px;
		    overflow: hidden;
		}
		
		.thongtin {
			
			background: red;
		}
		a{
			text-decoration: none;
		}
		.noidung{
				margin-top: 100px;
			margin-left: 100px;
		}
		.the5{
    margin-left: 10px;
    margin-top: 50px;
    width: 90%;
  
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;

}
.the5cot1{
    width: 200px;
    height: 100px;
    border-radius: 20px;
    margin-bottom: 50px;
    
    transition: 0.4s;
    margin-bottom: 50px;
    text-align: center;
    line-height: 90px;
   color: white
   
}



table{
	border:1px;
}

.hey1{
	width: 100px;	
	/*background: red;*/
	height: 102px;
	/*line-height: 101px;*/
	border-radius: 20px;
	/*margin-top: -17px;*/
	float: left;

}
.hey2 p{
	margin-top: 50px;
	line-height: 10px;
	font-size: 35px;

}

.abc{
	width: 100%;
	font-size: 40px;
	height: 50px;
	text-align: left;
	margin-left: 35px;

}

.tacvu{
    height: 5000px;
    
    width: 100%;
    display: flex;
    margin-top: -40px;
    flex-wrap: wrap;

}
table th{
			font-size: 15px;
		}

a{
	color: black;
}
input[type=text] {
				margin-left: 90px;
			    width: 60%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 6px;
			    resize: vertical;
			}
			input[type=number] {
				margin-left: -90px;
			    width: 60%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 6px;
			    resize: vertical;

			}
			input[type=file] {
				margin-left: -90px;
			    width: 60%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 6px;
			    resize: vertical;
			}
			input[type=date] {
				margin-left: -90px;
				text-align: left;
			    width: 60%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 6px;
			    resize: vertical;
			}

			input[type=submit] {
			    background-color:#BDBDBD;
			    color: black;
			    padding: 12px 20px;
			    border: none;
			    border-radius: 4px;
			    cursor: pointer;
			    margin-left: 50px;

			}

			input[type=submit]:hover {
			    background-color: #2196F3;
			    color:white;

			   
			}
			textarea[type=text]{
				resize: vertical;
				box-sizing: border-box;
				 border-radius: 4px;
				   border: 1px solid #ccc;
				   margin-top: 6px;

				   width: 80%;
				}

			.tacvu b{
				text-align: left;
			}

			table{
				/*background: pink;*/
				line-height: 30px;
				padding-top:10px;
			}

			table tr th{
				height: 30px;
			}

			select{
				width: 70%;
				height: 40px;
			}

			textarea{
				margin-left: 50px;
			}
			.ok{
				/*margin-left: 100px;*/
			line-height: 50px;
			}

			




	</style>

</head>
<body>
	<div id="body">
		<div class="head">
			<div class="headleft">
				<h2><i class="fa fa-check-square-o " aria-hidden="true"></i>
				 Admin: 
					@if(Auth::check())
					<b style="color: red">
						{{Auth::user()->name}}
					</b>
					@endif
              	</h2>
			</div>
		<!--  <div class="headright">
				<img src=""> 
				<ul>
						<li>  <h3> Xin chào </h3> </b>
							<ul  class="sub-head">
								<li ><a href=""><i class="fa fa-user" aria-hidden="true"></i> &ensp;Hồ sơ</a></li>
								<li><a href=""><i class="fa fa-lock" aria-hidden="true"></i> &ensp;Đăng xuất</a></li>
							</ul>
						</li>
				</ul>
				
			</div> -->
		</div>
		<div class="content">
			<div class="contentleft">
				<ul>	


					   
					    <!-- <li><a href="#"><i class="fa fa-bars " aria-hidden="true"> -->
					    <li><a href="{{route('dashboard')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>&ensp; Dashbroad</a></li>
					    <li>
					    	<a href="">Danh sách khách hàng đi tour</a>
					    </li>
					    <li><a href="{{route('users.all')}}"><i class="fa fa-user" aria-hidden="true"></i>&ensp; Quản lý người dùng &emsp;&emsp;</a>
					    </li>
					    <li>
					    	<a href="{{route('news.all')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&ensp;Quản lý tin tức tour&emsp;&emsp;</a>
					    	
					    </li>
					    <li>
					    	<a href="{{route('tour.all')}}"><i class="fa fa-plane" aria-hidden="true"></i>&ensp; Quản lý tour &emsp;&emsp;&emsp;&emsp;&emsp;</a>
					    	
					    </li>
					    <li>
					    	<a href="{{route('quanlydattour')}}"><i class="fa fa-bell" aria-hidden="true"></i>&ensp; Quản lý đặt tour</a>
					    		<!-- <ul  class="sub-contentleft">

									<li ><a href=""> &ensp;Thêm tour</a></li>
									<li><a href=""> &ensp;Sửa tour</a></li>
									<li><a href=""> &ensp;Xóa tour</a></li>
							</ul> -->

					    </li>
					   <!--  <li><a href="#">Quản lý đặt tour</a></li> -->
					    
					    <li><a href="{{route('quanlyphanhoi')}}"><i class="fa fa-comments-o" aria-hidden="true"></i>&ensp; Quản lý phản hồi</a></li>
					    
					    <!-- <li><a href="chucvu.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>&ensp; Chức vụ</a></li> -->
					   <!--  <li><a href="taikhoan.php"><i class="fa fa-lock" aria-hidden="true"></i>&ensp; Tài Khoản</a></li> -->
					    <li><a href="{{route('logout')}}"><i class="fa fa-power-off" aria-hidden="true"></i>&ensp; Đăng xuất</a></li>
					</ul>
			</div>
			
			<div class="contentright">
				<div class="abc">
			
				</div>
				
				<p style="border-bottom: 2px dotted #cccccc;"></p>	


			<div class="the5">
        		@yield('addusers')
        		
				@yield('dashboard')
				@yield('all_tour_update')
				@yield('all_users_update')
				@yield('all_role_update')
    		</div>

    	<div class="tacvu">
    		@yield('alltour')
    		@yield('themtour')
    		@yield('addnews')
    		
    		@yield('allusers')
    		@yield('allnews')
    		
    		
    		@yield('quanlydattour_update')
    		@yield('quanlyphanhoi_update')
    		@yield('customertour')
    		@yield('quanlyphanhoi')
    		@yield('quanlydattour')
    	</div>



		</div>
	</div>
</body>
</html>


<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script> CKEDITOR.replace('editor1'); </script>