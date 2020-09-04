@extends('admin_layout')
@section('dashboard')


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.the5{
    margin-left: 10px;
    margin-top: 50px;
    width: 9	0%;
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
.contentright{
			
			margin-top: 2%;
			margin-left: 26%;
			padding-right: : 30%;
		 	background: white;
		 	width: 70%;
		    text-align: center;
		    height: 1600px;
		    line-height: 100px;
		    overflow: hidden;
		}
	.widget{
		width: 100%;
		height: 500px;
		/*background: red;*/
	}
	.tournoibat{
		width: 40%;
		height: 500px;
		/*background: pink;*/
		float: left;
		margin-left: 100px;
	/*border: 2px groove;*/
	}
	.tournoibat1{
		height: 50px;
		line-height: 50px;
	}
	.tourmoinhat{
		width: 40%;
		height: 500px;
		/*background: blue;*/
		/*border: 2px groove;*/
		margin-left: 55%;
	}
	.moinhat{
		/*border: 2px groove;*/
		background: pink;
		height: 50px;
		line-height: 50px;
	}
	.moinhat1{
		
		height: 50px;
		line-height: 50px;
	}

	
	.divTable {
	display: table;
	border-collapse: collapse;
	border-spacing: 0;
	width: 100%;
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
	text-align: left;

}
.divTable .Row:nth-of-type(odd) {
    background-color: #f9f9f9;
}
.divTable .Row:hover {
	background-color: pink;
	cursor: default
}
.divTable .Cell {
	display: table-cell;
	border: 1px solid #ddd;
	border-width: thin;
	padding: 8px;
	text-align: left;
	padding-left: 20px;
}
	</style>
</head>
<body>






 <div class="the5cot1" style="background: #5882FA	 ">
        	<div class="hey1" > 
					<p><i class="fa fa-user fa-4x" aria-hidden="true"></i> </p>
        	</div>
      
				<div class="hey2">
					<p>  {{$users}} </p>				
				</div>	

        </div>

        <div class="the5cot1" style="background: #2EFE64">
        	<div class="hey1"> 
					<p><i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i> </p>
        	</div>
				<div class="hey2">
					<p> {{$news}}  </p>	
				</div>	
        </div>
  
        <div class="the5cot1"  style="background:#FAAC58 ">
        	<div class="hey1"> 
					<p><i class="fa fa-plane fa-4x" aria-hidden="true"></i> </p>
        	</div>
				<div class="hey2">
					<p> {{$categoryTour}}  </p>	
				</div>	
        </div>
        <div class="the5cot1"  style="background:#FA8258 ">
        	<div class="hey1"> 
					<p><i class="fa fa-comments-o fa-4x" aria-hidden="true"></i> </p>
        	</div>
				<div class="hey2">

					<p>{{$conTact}} </p>	

				</div>	
        </div>
        <div class="the5cot1"  style="background:#FA8258 ">
        	<div class="hey1"> 
					<p><i class="fa fa-bell fa-4x" aria-hidden="true"></i></p>
        	</div>
				<div class="hey2">

					<p>{{$orderTour}} </p>	

				</div>	
        </div>
            
      

</body>
</html>
@endsection('')