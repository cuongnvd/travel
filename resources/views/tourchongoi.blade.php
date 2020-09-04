
@extends('master')
@section('tourchongoi')


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
       
div.container {
    width: 100%;
  
    padding-bottom: 5%;  
   height: 1000px;
}



nav {
    float: left;

    width: 300px;
    margin: 0;
    padding: 1em;
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
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
.content1{
  width: 100%;
  height: 450px;
  background: pink;
}
.list{
  width: 100%;
  height: 40px;
  background: red;
}
table{
    border-collapse:collapse;
}
table, tr, th{
    border:1px solid black;
}
.row{
  width: 90%;
  height: 1300px;
  margin-left: 10%;
  padding-top: 2%;

 display: flex; 


}
/* Cột bên trái và phải */
.column.left {
  width: 25%;
 height: 350px;
   text-align: left;
  list-style: none;
border: 2px dotted #cccccc;
margin-right: 5px;
margin-top: 5px;

}

.column.left:hover{
  border: 2px dotted #A9F5F2;
  background: #E0F8F7;
}
.row1{
  width: 90%;
  height: 1300px;
  margin-left: 10%;
  padding-top: 2%;

 display: flex; 


}
/* Cột bên trái và phải */
.column.left1 {
  width: 23%;
 height: 350px;
   text-align: left;
  list-style: none;
border: 2px dotted #cccccc;
margin-right: 10px;
margin-top: 5px;

}

.column.left1:hover{
  border: 2px dotted #A9F5F2;
  background: #E0F8F7;
}



.divTable {
  width: 100%;
  display: table;
  border-collapse: collapse;
  border-spacing: 0;
}
.divTable .divTitle {
  display: table-caption;
  text-align: center;
  font-weight: bold;
  font-size: larger;
}
.divTable .divHeading {
  display: table-row;
  font-weight: bold;
  border-bottom-width: 2px;
}
.divTable .divHeading .Cell {
  border-bottom-width: 2px;
}
.divTable .Row {
  display: table-row;
}
.divTable .Row:nth-of-type(odd) {
    background-color: #f9f9f9;
}
.divTable .Row:hover {
  background-color: #f5f5f5;
  cursor: default
}
.divTable .Cell {
  display: table-cell;
  border: 1px solid #ddd;
  border-width: thin;
  padding: 8px;
}
div.container {
    width: 100%;
  
    padding-bottom: 5%;  
    height: 1100px;
}



nav {
    float: left;

    width: 300px;
    margin: 0;
    padding: 1em;
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
    border-left: 0px solid gray;
    padding: 1em;
    overflow: hidden;
}
.content1{
  width: 100%;
  height: 450px;
  background: white;
}
.list{
  width: 100%;
  height: 40px;
  background: white;
}
table{
    border-collapse:collapse;
}
table, tr, th{
    border:1px solid black;
}
.row{
  width: 90%;

  margin-left: 7%;
  padding-top: 2%;
/*padding: 5px;*/
 display: flex; 


}
/* Cột bên trái và phải */




.divTable {
  width: 100%;
  display: table;
  border-collapse: collapse;
  border-spacing: 0;
}
.divTable .divTitle {
  display: table-caption;
  text-align: center;
  font-weight: bold;
  font-size: larger;
}
.divTable .divHeading {
  display: table-row;
  font-weight: bold;
  border-bottom-width: 2px;
}
.divTable .divHeading .Cell {
  border-bottom-width: 2px;
}
.divTable .Row {
  display: table-row;
}
.divTable .Row:nth-of-type(odd) {
    background-color: #f9f9f9;
}
.divTable .Row:hover {
  background-color: #f5f5f5;
  cursor: default
  
}
.divTable .Cell {
  display: table-cell;
  border: 1px solid #ddd;
  border-width: thin;
  padding: 8px;
}
.divTable .Cell:hover{
   border: 1px solid #A9F5F2;
background: #E0F8F7;
}
.pagination li{

    list-style: none;
   float: left;
    margin-left:40px;
    margin-top: -5px;
    color: red;
  }
a{
text-decoration: none;
color: black;

}
.link{
  height: 100%;
  width: 100%;
  position: relative;
}


</style>



</head>
<body>

    
 
<div class="container">


  
<nav>
  <h3 style="border-bottom: 2px dotted #cccccc;">Tour <b style="color: red"> mới nhất </b></h3>
  
  <br />

@foreach($listHotTour as $row)
  
 <div class="divTable">
      
         <a href="{{route('chitiettour', ['id' => $row->id])}}" >


        <div class="Row">
          <div class="Cell">
            <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 50px; height: 50px ; margin-left: 20px"> <a style="margin-left: 10px;"> {{$row->name_of_tour}}</a></p>
          </div>
        </div>
           </a>
</div>

 @endforeach

  <br />
  <p style="border-bottom: 2px dotted red;"></p>
  <br />
   <h3 style="border-bottom: 2px dotted #cccccc;">Tour <b style="color: red"> nổi bật </b></h3>
  <br />
   @foreach($listSpecialTour as $row)
<div class="divTable">
      
        <a href="{{route('chitiettour', ['id' => $row->id])}}" >
        <div class="Row">
          <div class="Cell">
            <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 50px; height: 50px ; margin-left: 20px"> <a style="margin-left: 10px;"> {{$row->name_of_tour}}</a></p>
          </div>
        </div>
      </a>
</div>
  @endforeach
</nav>

<article>
   <div class="list">
    <h1 style=" margin-left: 20px;border-bottom: 2px dotted #cccccc;">
      Tour <strong style="color: red">Trong Nước</strong>
      <a href="{{route('alltourtrongnuoc')}}" style="text-align: right; margin-left: 600px; color: red;font-size: 20px">
        Xem thêm tour  <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </h1>
    
  </div>

  <div class="content1">
 
    <div class="row1">
                @foreach($tourTrongNuoc as $row)
                  <div class="column left1">
                        <a href="{{route('chitiettour', ['id' => $row->id])}}" class="link">
                     <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 193px; height: 150px ; margin-left: 5px; padding-top: 5px"> </p>
                      <br />
                      <p style="float: right; font-size: 25px; color: red">{{$row->cost}}.VND</p>
                      <br /> 
                      <br />
                          <p style="margin-left: 5px; font-size: 20px"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$row->day_of_number}} Ngày {{$row->number_of_night}} Đêm</p>
                          <br />
                          <p style="margin-left: 5px; font-size: 25px">{{$row->name_of_tour}}</p> 
                          
                          </a>
                  </div>
                    @endforeach



              </div>
  </div>
  <div class="list">
  <!--   <strong>{!! $tourTrongNuoc->links() !!} </strong> -->
   
  </div>
  <br />
  <div class="list">
     <h1 style=" margin-left: 20px;border-bottom: 2px dotted #cccccc; ">Tour <strong style="color: red">Nước Ngoài</strong>
      <a href="{{route('alltournuocngoai')}}" style="text-align: right; margin-left: 600px; color: red; font-size: 20px">
        Xem thêm tour  <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
     </h1>
  </div>
  <div class="content1">
    
       <div class="row" >
                 @foreach($tourNuocNgoai as $row)
              
                  
                  <div class="column left"  > 
                    <a href="{{route('chitiettour', ['id' => $row->id])}}" class="link">
                    <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 202px; height: 150px ; margin-left: 5px; padding-top: 5px"> </p>
                          <br />
                          <p style="float: right; font-size: 25px; color: red">{{$row->cost }}.VND</p>
                          <br />
                          <br />
                              <p style="margin-left: 5px; font-size: 20px"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$row->day_of_number}} Ngày {{$row->number_of_night}} Đêm</p>
                              <br />
                               <p style="margin-left: 5px; font-size: 25px">{{$row->name_of_tour}}</p> 
                    </a>
                  </div>
       
                     @endforeach



              </div>
  </div>
  <!-- <div class="list">
    <strong>{!! $tourNuocNgoai->links() !!} </strong>
  </div> -->


</article>



</div>


</body>
</html>
@endsection