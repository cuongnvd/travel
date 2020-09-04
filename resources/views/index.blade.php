

@extends('master')
@section('content')





<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  #center{
        width: 100%;
    
        /*background: red;*/
        margin: auto;
         margin-bottom: 0%;
          margin-top: 0%;

      }

.row{
  width: 90%;
  height: 600px;
  padding-top: 1%;
  background: blue;
  margin-bottom: 5%;
   margin-top: 5%;
   margin-left: 5%;
}


#gioithieu{
  width: 88%;
  padding-bottom: 100px;

padding-left: 100px;
}
/* Cột bên trái và phải */


.row h1{
  margin-left: 10%;
 
}
.row a{
   text-decoration: none;
}

</style>



</head>
<body>
      <div id="center">
       
          <div class="slideshow-container">
        <h2></h2>
        <div class="mySlides slide-in">
          <img src="./images/halong.jpg" style="width:100%; max-height: 500px">
          <div class="text"></div>
        </div>

        <div class="mySlides slide-in">
          <img src="./images/slide4.jpg" style="width:100%;max-height: 500px">
          <div class="text"></div>
        </div>
        <div class="mySlides slide-in">
          <img src="./images/banahill.jpg" style="width:100%;max-height: 500px">
          <div class="text"></div>
        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
    </body>
    <script>
      //khai báo biến slideIndex đại diện cho slide hiện tại
      var slideIndex;
      // KHai bào hàm hiển thị slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 5000);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
           
    <br />
            
  
         

  </div>
  <div id="gioithieu">
      <p style="font-size: 30px"><strong> Giới thiệu về FTravel</strong></p>
      <br />
      <p style="font-size: 20px">Thành lập năm 2020, FTravel là một công ty mới có nhiều kinh nghiệm trong lĩnh vực Du lịch. FTravel là tiên phong trong việc sáng tạo các sản phẩm du lịch tiện ích dành cho khách hàng nội địa. FTravel sẽ liên tục tăng trưởng mạnh qua nhiều năm.</p>
      <br />
      <p style="font-size: 20px">
        Với mục tiêu mang đến cho khách hàng <strong>“Trải nghiệm kỳ nghỉ tuyệt vời”</strong>, FTravel kỳ vọng trở thành nền tảng du lịch nghỉ dưỡng số 1 cho khách hàng Đông Nam Á trong 5 năm tới.
      </p>
      <br />
      <p style="font-size: 20px">Dòng sản phẩm chính của FTravel là Tour du lịch. FTravel mong muốn sẽ mang lai cho khách hàng đầy đủ các lựa chọn.</p>
      <br />
      <p  style="font-size: 20px">
        Khách hàng chọn đặt dịch vụ với FTravel có thể đặt qua rất nhiều kênh: <strong>đặt trực tiếp tại website, gọi điện thoại Hotline, đặt qua Facebook và các mạng xã hội khác</strong>. Với FTravel mỗi kỳ nghỉ là một trải nghiệm tuyệt vời!
        <br />
        <br />

      <strong> Vui lòng liên hệ: </strong>

      <p  style="font-size: 20px">
        <br />
        1. Các liên hệ khác: <strong> 0906 355 542</strong>
      </p>
      <br >
      <p style="font-size: 20px">
        2. Dịch vụ khách hàng, đặt tour du lịch: Hotline  <strong> 0906 355 542</strong> – Email: <a href="" style="text-decoration: none; color: red"> tourftravel@gmail.com </a>
      </p>
      </p>


  </div>


</div>
      </div>
</body>
</html>
@endsection
