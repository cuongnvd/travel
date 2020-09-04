
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
  
   height: 2000px;

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

    width:100%;
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
table:hover{


border: 2px dotted #A9F5F2;
  background: #E0F8F7;
  }





   

      button{
           width: 30%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
      }
 
      .anh{
        width: 100%;
        height: 500px;
  
      } 

.content-tour img{
  max-width: 100%;
  max-height: 100%;

}
img{
  max-width: 100%;
  max-height: 100%;
}



 </style>

</head>
<body>

<div class="container">


 
<nav>
  

  

<p style=" font-size: 32px"><strong style="color: red"> {{$chitietnews->title}} </strong> </p>
<br />
<p style=" "><i class="fa fa-calendar" aria-hidden="true"></i> {{$chitietnews->sent_date}} </p>
  <p style="border: 1px dotted black;"></p>
  <br/>
<div class="anh">
  <div class="slideshow-container">
        <h2></h2>
        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitietnews->images )}}" style="width: 800px; height: 500px; margin-left: 50px">
          <div class="text"></div>
        </div>

        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitietnews->images1 )}}" style="width: 800px; height: 500px; margin-left: 50px">
          <div class="text"></div>
        </div>
        <div class="mySlides slide-in">
          <img src="{{ asset('images/'.$chitietnews->images2 )}}" style="width: 800px; height: 500px; margin-left: 50px">
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
</div>
<div class="nav1">

  <p style="border: 1px dotted black;"></p>
  <br />
  <div class="content-tour">{!! $chitietnews->content !!}</div>
</div> 


    </p>
</nav>
<br />
<br />
<br />


<article>

  <div class="content1">
    <h2>Tin <strong style="color: red">mới nhất </strong></h2>
    <p style="border: 1px dotted black;"></p>
    <br >
      @foreach($listNews as $row)
      <a href="  {{route('chitietnews', ['id' => $row->id])}}" style=" text-decoration: none; color: black">
      
    <table width="100%" >
      <tr>
        <th width="30%"><img src="{{ asset('images/'.$row->images )}}" width="70px" height="70px"></th>
        <th style="text-align: left;" width="70%">{{$row->title}}</th>
      </tr>
    </table>

      @endforeach
  </div>


<div class="article1">
  
</div>

</article>





</div>

</body>
</html>

@endsection