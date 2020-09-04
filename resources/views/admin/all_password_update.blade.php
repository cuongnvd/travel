@extends('admin_layout')
@section('all_users_update')

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
    width: 40%;
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
                width: 40%;
           
            }

            .thongbao{
                width: 100%;
               
              
            }

    </style>

</head>
<body>
    
    <div class="thongbao">
        <h1>{{ $pageName }}</h1>

    @if($errors->any())
    <p>
        @foreach($errors->all() as $error)
            <strong style="color: red">
               {{ $error }} 
             </strong>
        @endforeach
    </p>
    @endif  
    
    </div>
     
<div class="edituser">
<form method="post" action="{{route('password_update',$users->id )}}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $users->id }}">


     <div class="input-box">
    <table width="100%">
        <tr>
            <th style="text-align: right;">Name</th>
            <th style="text-align: center;">
                <input type="text" required="1" name="name" value="{{ $users->name }}">
            </th>
        </tr>
        <tr>
            <th style="text-align: right;">Email</th>
            <th>
                <input type="text" required="1" name="email"  readonly="1" value="{{ $users->email }}">
            </th>
        </tr>
        <tr>
            <th style="text-align: right;">Password</th>
            <th style="text-align: center;">
                <input type="password" required="1" name="password"  value="">
            </th>
        </tr>
         <tr>
            <th style="text-align: right;">Password Confirm</th>
            <th style="text-align: center;">
                <input type="password" required="1" name="passwordAgain"  value="">
            </th>
        </tr>
       
    </table>

 
              
        </div> 

        
    
        <p>  
        
        </p>


    <p>
        <button type="submit">Cập nhật</button>
    </p>
</form>
</div>
</body>
</html>









@endsection('')