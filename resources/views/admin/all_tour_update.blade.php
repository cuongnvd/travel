@extends('admin_layout')
@section('all_tour_update')

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">

.input-box input{
    padding: 7.5px 15px;
    width:80%;
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
                width: 80%
            }

    </style>

</head>
<body>
    
    @if($errors->any())
        <p>
        @foreach($errors->all() as $error)
            <strong style="color: red">
                {{ $error }} <br /> <br />
            </strong>
        @endforeach
        </p>
    @endif 

<form method="post" action="{{route('tour_update', $categoryTour->id )}}">
    @method('PATCH')
    @csrf
     <input type="hidden" name="id" value="{{$categoryTour->id }}">


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
            <th>Tên tour</th>
            <th width="70%">
                <input type="text" required="1" name="name_of_tour" value="{{$categoryTour->name_of_tour}}">
            </th>
        </tr>
        <tr>
            <th>Giá</th>
            <th>
                <input type="text" required="1" name="cost" value="{{ $categoryTour->cost }}">
            </th>
        </tr>
        <tr>
            <th>Ngày bắt đầu</th>
            <th> 
                <input type="date" required="1" name="the_start_day" value="{{ $categoryTour->the_start_day }}">
            </th>
        </tr>
        <tr>
            <th>Ngày kết thúc</th>
            <th>
                <input type="date" required="1" name="the_end_day" value="{{ $categoryTour->the_end_day }}">
            </th>
        </tr>
         <tr>
            <th>Số ngày</th>
            <th>
                <input type="number"  required="1" name="day_of_number" value="{{ $categoryTour->day_of_number }}">
            </th>
        </tr>

         <tr>
            <th>Số đêm</th>
            <th>
                <input type="number" required="1" name="number_of_night" value="{{ $categoryTour->number_of_night }}">
            </th>
        </tr>
         <tr>
            <th>Số chỗ</th>
            <th>
                <input type="number" required="1" name="seats_of_number" value="{{ $categoryTour->seats_of_number }}">
            </th>
        </tr>
         <tr>
            <th>Nội dung</th>
            <th>
                <textarea cols="50" required="1"  id="editor1" rows="5" name="content" style="resize: none;">{{ $categoryTour->content }}</textarea>
            </th>
        </tr>
         <tr>
            <th>Hình ảnh</th>
            <th>
                <input type="file" required="1" name="images" value="{{ $categoryTour->images }}">
            </th>
        </tr>
        <tr>
            <th>Hình ảnh</th>
            <th>
                <input type="file" required="1" name="images1" value="{{ $categoryTour->images1 }}">
            </th>
        </tr>
        <tr>
            <th>Hình ảnh</th>
            <th>
                <input type="file" required="1" name="images2" value="{{ $categoryTour->images2 }}">
            </th>
        </tr>
         <tr>
            <th>Loại tour</th>
            <th>
                <select name="types_of_tour_id"  required="1" value="{{ $categoryTour->types_of_tour_id }}">
                 
                    <option value="1">Trong nước</option>
                    <option value="2">Nước ngooài</option>
                    </select>
            </th>
        </tr>
        <tr>
            <th>Loại in out</th>
            <th>
                 <select name="type_in_out" required="1" value="{{ $categoryTour->type_in_out }}">
                    <option value="0">Trong nước</option>
                    <option value="1">Nước ngooài</option>
            
                    
                    </select>
            </th>
        </tr>
        <tr>
            <th>Loại in out</th>
            <th>
                  <select name="specialtour" required="1" value="{{ $categoryTour->specialtour }}">
                    
                    <option value="0">Tour thường</option>
                    <option value="1">Tour nổi bật</option>
                    </select>
            </th>
        </tr>
         <tr>
            <th>Địa điểm khởi hành</th>
            <th>
                <input type="text" required="1" name="place_of_departure" value="{{ $categoryTour->place_of_departure }}">
            </th>
        </tr>
         <tr>
            <th>Ghi chú</th>
            <th>
                <textarea cols="50" required="1" rows="5" name="note" style="resize: none;">{{ $categoryTour->note }}</textarea>
            </th>
        </tr>
        <tr>
            <th></th>
            <th></th>
        </tr>
         <tr>
            
            <th></th>
            <th><button type="submit">Cập nhật</button></th>
        </tr>
    </table>

 
              
        </div> 

        
</form>

</body>
</html>









@endsection('')

