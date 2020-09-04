
@extends('admin_layout')
@section('quanlyphanhoi_update')


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
                 outline: none;
            }

    </style>

</head>
<body>
    <h1>{{ $pageName }}</h1>
<div class="edituser">
<form method="post" action="{{route('quanlyphanhoi_update',$conTact->id )}}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $conTact->id }}">


<div class="input-box">

    <table width="100%">
        <tr>
            <th>Name</th>
            <th>
                  <input type="text" name="name" readonly="" value="{{ $conTact->name }}">
            </th>
        </tr>
        <tr>
            <th>Phone number</th>
            <th>
               <input type="text" name="phone_number" readonly="1" value="{{ $conTact->phone_number }}">
            </th>
        </tr>
        <tr>
            <th>Email</th>
            <th>
                <input type="text" name="email"  readonly="1" value="{{ $conTact->email }}">
            </th>
        </tr>
        <tr>
            <th>Title</th>
            <th><input type="text" name="title"  readonly="1" value="{{ $conTact->title }}"></th>
        </tr>
        <tr>
            <th>Content</th>
            <th>
                <textarea cols="50" rows="5" readonly="1" name="content" style="resize: none;">{{ $conTact->content }}</textarea>

            
            </th>
        </tr>
       
        <tr>
            <th>Status</th>
            <th>
                <select name="status" value="{{ $conTact->status }}">
                    
                    <option value="0">Chưa Trả lời</option>
                    <option value="1">Đã Trả lời</option>
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