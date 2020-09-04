
@extends('master')
@section('alltourtrongnuoc')



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .body-tour{
      width: 100%;
    
    }
     .column.left {
  width: 20%;
 height: 450px;
   text-align: left;
  list-style: none;
border: 2px dotted #cccccc;
margin-right: 5px;
margin-top: 5px;
margin-left: 1.3rem;
 text-decoration: none;

}
.column.left:hover{


border: 2px dotted #A9F5F2;
  background: #E0F8F7;
  }
   .row{
  width: 100%;
  height: 500px;
 margin-left: 5%;
  padding-top: 2%;
/*padding: 5px;*/
 display: flex; 


}
.list{
  width: 100%;
  height: 40px;
  background: white;
}
.pagination li{

    list-style: none;
   float: left;
    margin-left:40px;
    margin-top: -5px;
    color: red;
  }
  </style>
</head>
<body>
  <div class="body-tour">
    <div class="row">
        @foreach($listNews as $list)
                  <div class="column left">
                         <a href="{{route('chitietnews', ['id' => $list->id])}}" style=" text-decoration: none; color: black">
                     <p> <img src="{{ asset('images/'.$list->images )}}"  style="max-width: 260px; max-height: 200px ; margin-left:5px; padding-top: 5px"> </p>
                        <br />
                     <p style="margin-left: 5px; font-size: 25px; color: red">{{$list->sent_date}}</p>
                
                          <br />
                          <p style="margin-left: 5px; font-size: 25px">{{$list->title}}</p> 
                          
                          </a>
     
                  </div>
        @endforeach
                 

                </div>
        <div class="list">
         <strong>{!! $listNews->links() !!} </strong>
      </div>
  </div>
</body>
</html>


@endsection