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
            .key{
                width: 100%;
                height: 50px;
                background: red;
            }
            .box1{
                width: 15%;
                height: 50px;
                background: blue;
                float: left;
            }
            .box2{
                width: 15%;
                height: 50px;
                background: yellow;
                margin-left: 20%;
            }
    </style>

</head>
<body>
  <!--   <div class="key">
        <table width="50%">
            <tr>
                <th width="1%" style="background: blue">

                    <a href="" style="width: 100%">ádasd</a>
                </th>
                <th width="1%" style="background: yellow">
                    <a href="" style="width: 100%">ádasd</a>
                </th>
            </tr>
        </table>
    </div> -->
    
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
<form method="post" action="{{route('users_update',$users->id )}}">
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
        <!-- <tr>
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
        </tr> -->
        <tr>
            <th style="text-align: right;">Chức vụ của user</th>
            <th>
                <select name="role" required="1" value="{{ $users->role }}">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
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