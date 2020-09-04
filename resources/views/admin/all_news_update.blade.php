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
    <h1>{{ $pageName }}</h1>
<div class="edituser">
<form method="post" action="{{route('news_update', $news->id )}}">
    @method('PATCH')
    @csrf
 <input type="hidden" name="id" value="{{ $news->id }}">


<div class="input-box">

    <table width="100%">
        <tr>
            <th>Title</th>
            <th>
                <input type="text" required="1" name="title" value="{{ $news->title }}">
            </th>
        </tr>
        <tr>
            <th>Images</th>
            <th>
                <input type="file" required="1" name="images" value="{{ $news->images }}">
            </th>
        </tr>
        <tr>
            <th>Images2</th>
            <th>
                <input type="file" required="1" name="images1" value="{{ $news->images1 }}">
            </th>
        </tr>
        <tr>
            <th>Images3</th>
            <th>
                <input type="file"  required="1" name="images2" value="{{ $news->images2 }}">
            </th>
        </tr>
        <tr>
            <th>Nội dung</th>
            <th>
                <textarea cols="50" required="1"  id="editor1" rows="5" name="content" style="resize: none;">{{ $news->content }}</textarea>
                </th>
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

