
@extends('master')
@section('chitiettour')


<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  
div.container {
    width: 100%;
  
    padding-bottom: 5%;  
    height: 1500px;
}



nav {
    float: left;

    width: 65%;
    margin: 0;
    padding: 1em;
    height: 500px;;
}
.nav1 {
    float: left;

    width: 60%;
    margin: 0;
    padding: 1em;

    margin-top: 10%;
}


nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    height: 1600px;
    padding: 1em;
    overflow: hidden;
}
.article1 {
  width: 100%;
  height: 450px;

margin-top: 10%;
}
.content1{
  width: 100%;
  height: 450px;

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
.input-box select{
    padding: 7.5px 15px;
    width: 90%;
    font-size: 20px;
    border: 1px solid #cccccc;
    outline: none;
}
     
      
      
     

      button[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          margin-left: 50px;
      }

      button[type=submit]:hover {
          background-color: #45a049;

         
      }
     
          
label{
  color: black;

}
.thongtin{
  text-align: left;
}
 .thanhtoan{
          width: 90%;
          height: 150px;
    
        
        }
         input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}

 .anh{
        width: 100%;
        height: 500px;
  
      } 
      .hetve{
        width: 100%;
        height: 50px;
        background:#CEF6CE;
        border-radius: 20px;
        line-height: 50px;
      }
      img{
        max-width: 100%;
      }
</style>
</head>
<body>


<div class="container">


 
<nav>
  

  

<p style="margin-left: 90px; font-size: 32px"><strong> {{$chitiet->name_of_tour}} </strong> </p>

  <p style="border: 1px dotted black;"></p>

<br />
<div class="anh">
  <div class="slideshow-container">
        <h2></h2>
        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitiet->images )}}" style="width: 800px; height: 500px; margin-left: 50px">
          <div class="text"></div>
        </div>

        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitiet->images1 )}}" style="width: 800px; height: 500px; margin-left: 50px">
          <div class="text"></div>
        </div>
        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitiet->images2 )}}" style="width: 800px; height: 500px; margin-left: 50px">
          <div class="text"></div>
        </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
      </div>  
   
</div>


</nav>

<div class="nav1">
  <h2 style="margin-left: 90px">Chương trình tour</h2>
  <p style="border: 1px dotted black;"></p>
  <br />
  <h2>{!! $chitiet->content !!}</h2>

</div>

<article>
  <div class="content1">
    <p style="text-align: center; padding-top: 20px;font-size: 20px;color: red"><strong> Đặt ngay, chỉ 2 phút. Hoặc gọi (028) 3333 8080</strong> </p>
    <br />
    <p>
      Khởi hành: <strong style="color: red">

        {{$chitiet->the_start_day}} </strong> 
    </p>
    <br />
    <p>
      Thời gian: <strong style="color: red">{{$chitiet->day_of_number}} Ngày {{$chitiet->number_of_night}} Đêm </strong>
      </p>
    <br />  
    <p>
      Địa điểm khởi hành: <strong style="color: red">{{$chitiet->place_of_departure}}</strong>
    </p>
    <br />
    <p style="border: 1px dotted black;"></p>
    <br />
    <p>
      Số chỗ còn lại: 
        <strong style="color: red">
        
         {{$chitiet->seats_of_number}}
          
        </strong></p>
    <br />
    <table width="100%">
      <tr>
        <th width="50%" style="text-align: left; font-size: 20px">Giá tiền: <strong style="color: red">{{$chitiet->cost}}.VND</strong></th>
   
      </tr>
  
    </table>
    <br />
    <p></p>
    
     <p style="border: 1px dotted black;"></p>
     <br/>
     <p>Bạn cần <strong style="color: red"> hỗ trợ?</strong></p>
     <br />
     <p > <strong> Liên hệ: (028) 323 323 </strong></p>
     <br />
     <p>Hoặc <strong style="color: red"> <a href="{{route('lienhe')}}" style="text-decoration: none; color: red">gửi yêu cầu</a></strong></p>
      <br />
       
         
         <p style="border: 1px dotted black;"></p>
         <p style=" padding-top: 20px;text-align: center;font-size: 20px ;color: red"><strong> Thông tin liên lạc</strong> 
         <br />
         <br />
         <div class="thongtin">
           <form action="{{route('orderTour')}}" method="post">
            {{ csrf_field()}}
         
          <div class="input-box">
              <i ></i>
              <input type="text" required="1" name="names" placeholder="Nhập họ và tên...">
          </div>
          <div class="input-box">
              <i ></i>
              <input type="text" required="1" name="phone_number" placeholder="Nhập số điện thoại...">
          </div>
          <div class="input-box">
              <i ></i>
              <input type="text" required="1" name="address" placeholder="Nhập địa chỉ...">
          </div>
          <div class="input-box">
              <i ></i>
              <input type="text" required="1" name="email" placeholder="Nhập email...">
          </div>

          <div class="input-box">
              <i ></i>
              <input type="text" required="1" name="seats_of_number" placeholder="Tổng số vé" min="1">
              <span id="tongsove" style="color: red"></span>
          </div>
          <div class="input-box">
              <i ></i>
             <select name="payments" required="1">
               <option value="0">Tiền mặt</option>
               <option value="1">Chuyển khoản</option>
             </select>
          </div>
         
    
          <input type="hidden" name="tours_id" value="{{$chitiet->id}}">

          <input type="hidden" name="name_of_tour" value="{{$chitiet->name_of_tour}}">
          
          <br />  

       

          <div class="input-box">
              <i ></i>

              <input type="text" name="tong" readonly="1" onChange="format_curency(this);" placeholder="Tổng tiền" min="1" style="color: red" >
          </div>
         
          <br />
                     </p>
            @if($chitiet->seats_of_number > 0 )
           
          <p style="margin-left: 100px">  <a href=""> 
            <button type="submit" value="Đặt ngay" 
            name="add_order_tours"> Đặt ngay</button></p>
            @else
            
            <div class="hetve">
            <b style="margin-left: 100px; font-size: 25px; width: 100%; color: #FA5858">Hết vé cho tour này</b>
             </div>
           
            @endif
            <br />

            <br />
                <p style="color: red;text-decoration: none; font-size: 20px;">
           
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
          </form>
          <br />
<p style="border: 1px dotted black;"></p>
        <h3>
          
        </h3>

          </div>
    
   
      <br />
      <br />
     


  </div>

<div class="article1">
  
</div>

</article>





</div>
 
<script>

  const selectTour = document.querySelector('input[name="seats_of_number"]');

  selectTour.addEventListener("change", (event) => { 
      const result = document.querySelector('input[name="tong"]');

    const totallyTicket = parseFloat('{{$chitiet->seats_of_number}}')
   
    let gia = '{{$chitiet->cost}}'

    gia = parseFloat(gia.split('.').join(',').replace(/,/g, ''))

    if(parseFloat(selectTour.value) > totallyTicket) {
      document.querySelector('span#tongsove').innerHTML = "không được đặt nhiều hơn số tour hiện có"
      result.value = ''
      return
    }
    else {
      result.value = (parseFloat(selectTour.value) * gia).toLocaleString();
    };
  })
</script>



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

</body>
</html>

@endsection


