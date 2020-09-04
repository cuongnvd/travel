
@extends('admin_layout')
@section('quanlydattour_update')



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .edituser{
            width: 100%;
            height: 700px;

        }
            .input-box{
    margin-bottom: 10px;
}
.input-box input{
    padding: 7.5px 15px;
    width: 80%;
    font-size: 20px;
    border: 1px solid #cccccc;
    outline: none;
    margin-left: 10px;
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

            select{
                width: 80%;
           
            }
            textarea{
                 width: 80%;
                 height: 150px;
            }

    </style>

</head>
<body>
    
<div class="edituser">
<form method="post" action="{{route('quanlydattour_update',$orderTours->id )}}">
    @method('PATCH')
    @csrf
   <input type="hidden" name="id" value="{{ $orderTours->id }}">


<div class="input-box">

    <table width="100%">
        <tr>
            <th></th>
            <th><h1>{{ $pageName }}</h1></th>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <th>Name</th>
            <th>
                 <input type="text" name="names" readonly="1" value="{{ $orderTours->names }}">
            </th>
        </tr>
        <tr>
            <th>Phone number</th>
            <th>
               <input type="text" name="phone_number" readonly="1" value="{{ $orderTours->phone_number }}">
            </th>
        </tr>
        <tr>
            <th>Email</th>
            <th>
                 <input type="text" name="email"  readonly="1" value="{{ $orderTours->email }}">
            </th>
        </tr>
        <tr>
            <th>Name of tour</th>
            <th>
                <input type="text" name="name_of_tour"  readonly="1" value="{{ $orderTours->name_of_tour }}">
            </th>
        </tr>
        <tr>
            <th>Status</th>
            <th>
                <select name="status" value="{{ $orderTours->status }}">
                    
                    <option value="0">Chưa xác nhận</option>
                    <option value="1">Đã Xác Nhận</option>
                    </select>
        </tr>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th></th>
            <th>  
                <button type="submit">Update</button>
            </th>

        </tr>
    </table>
    
        </div> 

</form>
</div>
</body>
</html>

@endsection('')