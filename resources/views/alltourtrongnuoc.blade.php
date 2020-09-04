
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
 height: 400px;
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
  .list-tour{
    width: 100%;
    height: 50px;
    line-height: 50px;
    margin-left: 50px;

  }
	</style>
</head>
<body>
	<div class="body-tour">
    <div class="list-tour">
        <h2 style="border-bottom: 2px dotted #cccccc;">
          Danh sách tour trong nước
        </h2>
        
    </div>
		<div class="row">
       	@foreach($tourTrongNuoc as $row)
                  <div class="column left">
                         <a href="{{route('chitiettour', ['id' => $row->id])}}" style=" text-decoration: none; color: black">
                     <p> <img src="{{ asset('images/'.$row->images )}}"  style="width: 260px; height: 200px ; margin-left:5px; padding-top: 5px"> </p>
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
        <div class="list">
   			 <strong>{!! $tourTrongNuoc->links() !!} </strong>
  		</div>
	</div>
</body>
</html>


@endsection