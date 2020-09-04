@extends('master')
@section('lienhe')




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">


		#center{
			width: 100%;
			
		}


		.lienhe {
	        	width: 80%;
	            margin: auto;
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
			   
			    margin-bottom: 2%;
			    margin-top: 2%;
			    border: 2px dotted #cccccc;

	        }
	   
          

			button[type=submit] {
			    background-color: #4CAF50;
			    color: white;
			    padding: 12px 20px;
			    border: none;
			    border-radius: 4px;
			    cursor: pointer;
			    margin-left: 450px;
			}

			button[type=submit]:hover {
			    background-color: #45a049;

			   
			}

			textarea[type=text]{
				resize: vertical;
				box-sizing: border-box;
				outline: none;
				border: 1px solid #cccccc;
				   margin-top: 6px;
				}

		#lienhe1{
			text-align: left;
			font-size: 15px;
			margin-bottom: 15px;
			margin-left: 30 px;
			margin-right: 30px;
			line-height: 25px;
			width: 91%;
			height: 150px;
			 border-radius: 5px;
			 	background-color: #f2f2f2;
			 padding-left: 120px;
		
			
		}
		

		#lienhe1 h3{
			color: red;

		}
    	select{
    		width: 100%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    box-sizing: border-box;
			    margin-top: 6px;
			    margin-bottom: 6px;
			    resize: vertical;
    	}
    	.input-box{
    margin-bottom: 10px;
}
.input-box input{
    padding: 7.5px 15px;
    width: 90%;
    font-size: 20px;
    border: 1px solid #cccccc;
    outline: none;
}

	</style>
</head>
<body>
<div id="center">
	

<div class="lienhe">
			<h1 style="text-align: center; color: red;">LIÊN HỆ </h1>
			<p style="text-align: center; margin-bottom: 40px; font-size: 18px; margin-top: 15px">Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ</p>
			 <p style="color: red; text-decoration: none; font-size: 20px;">
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
                 <br />
                 <br />

		    <form action="{{route('conTact')}}" method="post">
		    	 {{ csrf_field()}}
		    	<div class="input-box">
                        <i ></i>
                        <input type="text" name="name" placeholder="Nhập họ và tên...">
                </div>
              
                <div class="input-box">
                        <i ></i>
                        <input type="text" name="email" placeholder="Nhập email...">
                </div>
                <div class="input-box">
                        <i ></i>
                        <input type="text" name="phone_number" placeholder="Nhập số điện thoại...">
                </div>
                <div class="input-box">
                        <i ></i>
                        <input type="text" name="title" placeholder="Nhập tiêu đề...">
                </div>
                <div class="textarea-box">
                        <i ></i>
                        <textarea type="text" cols="140" rows="10" id="ghichu" name="content" placeholder=" Nhập nội dung..." ></textarea>
                </div>

			  	 

			  	<button type="submit" value="Gửi" name="add_contact">
			  		Gửi
			  	</button>
			    

			   			</form>
		</div>
 <div id="lienhe1">
    	<table style="width: 91%">
    			
    			<div style="display: inline-table;width: 380px;">
    				<h3>Hà Nội</h3>
    				<p><i class="fa fa-map-marker" aria-hidden="true"></i> 03 Hai Bà Trưng, Quận Hoàn Kiếm, Hà Nội </p>
					
					<p><i class="fa fa-phone" aria-hidden="true"></i> Tel: (84-28) 3822 8898 </p>
				
					<p><i class="fa fa-phone" aria-hidden="true"></i> Fax: (84-28) 3829 9142 </p>
				
					<p><i class="fa fa-envelope" aria-hidden="true"></i> Email: ftravel.hanoi@ftravel.com </p>
				

    			</div>
    			<div style="display: inline-table;width: 380px;">
    			<h3> Nha Trang</h3>
    				<p><i class="fa fa-map-marker" aria-hidden="true"></i> 26 Nguyễn Đình Chiểu, Vĩnh Phước,Tp.Nha Trang </p>
				
					<p><i class="fa fa-phone" aria-hidden="true"></i> Tel: (84-28) 3822 8898 </p>
				
					<p ><i class="fa fa-phone" aria-hidden="true"></i> Fax: (84-28) 3829 9142 </p>
				
					<p><i class="fa fa-envelope" aria-hidden="true"></i> Email: ftravel.nhatrang@ftravel.com </p>
				
    			</div>
    			
    			<div style="display: inline-table;width: 380px;">
    				<h3> Hồ Chí Minh</h3>
    				<p><i class="fa fa-map-marker" aria-hidden="true"></i> 190 Pasteur, Quận 1, Tp. Hồ Chí Minh</p>
					
					<p><i class="fa fa-phone" aria-hidden="true"></i> Tel: (84-28) 3822 8898 </p>
					
					<p ><i class="fa fa-phone" aria-hidden="true"></i> Fax: (84-28) 3829 9142 </p>
				
					<p ><i class="fa fa-envelope" aria-hidden="true"></i> Email: ftravel.hochiminh@gmail.com </p>
	
    			</div>

</table>
</div>
</body>
</html>
@endsection