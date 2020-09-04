


@extends('master')
@section('timkiem')





<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <style type="text/css">
   
div.container {
    width: 100%;
  
    padding-bottom: 5%;  
    height: 700px;
}



nav {
    float: left;

    width: 65%;
    margin: 0;
    padding: 1em;
    height: 500px;;
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






     
     
        input[type=number] {
          width: 60%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
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
      input[type=date]{
        width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          
          font-size: 15px;
        }
        input[type=date]:hover{
          border: 1px solid red;
        }
         

     
.datcho {
          width: 80%;
          margin: auto;
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
          margin-bottom: 2%;
          margin-top: 2%;
          border: 2px dotted #cccccc;


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
      select:hover{
        border: 1px solid red;
      }
      .column.left {
  width: 30%;
 height: 350px;
   text-align: left;
  list-style: none;
border: 2px dotted #cccccc;
margin-right: 5px;
margin-top: 5px;
margin-left: 0.5rem;
text-decoration: none;

}
.column.left:hover{
  background:  #E0F8F7;
}
   .row{
  width: 90%;
  height: 400px;
 margin-left: 15%;
  padding-top: 2%;
/*padding: 5px;*/
 display: flex; 


}
.list{
  width: 100%;
  height: 50px;

  text-align: center;
}
p {
  text-decoration: none;
}
.pagination li{


  width: 20px;

    list-style: none;
   float: left;
    margin-left:40px;
    margin-top: -5px;
    color: red;
  }
  .pagination:hover{
    background:  #E0F8F7;
  }
 </style>
</head>
<body>

<div class="container">


 
<nav>
  <?php 
  function doimau($str, $tukhoa)
  {
    return str_replace($tukhoa, "<span style='color:red;'>$tukhoa</span>", $str);

  }
  ?>

  

<p style="margin-left: 90px; font-size: 32px;"><b>TÌM KIẾM</b><strong style="color: red">  {{$tukhoa}}</strong> </p>

  <p style="border: 1px dotted black;"></p>

<br />
    <div class="row">
                @foreach($tour as $row)

                  <div class="column left">
                        <a href="{{route('chitiettour', ['id' => $row->id])}}" class="link" style="text-decoration: none;">
                     <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 225px; height: 150px ; margin-left:5px; padding-top: 5px"> </p>
                      <br />
                          <p style="float: right; font-size: 25px;color: red">
                            {{ $row->cost }}.VND</p> 
                      <br />
                      <br />
                          <p style="margin-left: 20px; font-size: 20px; text-decoration: none;color: black"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$row->day_of_number}} Ngày {{$row->number_of_night}} Đêm</p>
                          <br />
                          <p style="margin-left: 20px;font-size: 25px; color: red; ">
                            {!! doimau($row->name_of_tour, $tukhoa) !!}</p>
                          </a>
                  </div>
            
                 @endforeach


                </div>
<div class="list">
   {{$tour->appends(['tukhoa' => $tukhoa])->links()}}
</div>

</nav>

<div class="nav1">


</div>

<article>
  

<div class="article1">
  
</div>

</article>





</div>

</body>
</html>




@endsection