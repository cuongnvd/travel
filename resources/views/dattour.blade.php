


@extends('master')
@section('dattour')

<!DOCTYPE html>
<html>
<head>
<style>
  .body{
    width: 100%
    height:auto;

  }
.thongtin{
  width: 100%;
  height: 1500px;

padding-top: 30px;
}
strong{
  font-size: 25px;

  color: red;
}
.tour{
  margin-top: 20px;
  width: 90%;
  height: 200px;

  margin-left: 100px;

}
.tour1{
  margin-top: 30px;
  width: 90%;
  height: 500px;

  margin-left: 100px;
  padding-top: 10px;
}
.left1{
  width: 49%;
  height: 250px;
  float: left;

}
.right1{
  width: 50%;
  height: 250px;
  float: right;

}
.left{
  width: 30%;
  height: 200px;
  float: left;

}
.right{
  width: 70%;
  height: 200px;
  float: right;
 
}
.anh{

  width: 80%;
  height: 200px;


}

table{
margin-left: 100px;
text-align: left;
width: 70%;
height: 100px;


}
table tr th{
  border: 1px dotted black;

}
input[type=text] {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 6px;
          resize: vertical;
      }
      input[type=text]:hover {
          border: 1px solid red;
      }
        input[type=number] {
          width: 20%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
      }
      input[type=number]:hover {
          border: 1px solid red;
      }
      textarea[type=text]{
        resize: vertical;
        box-sizing: border-box;
         border-radius: 4px;
           border: 1px solid #ccc;
           margin-top: 6px;
        }
        textarea[type=text]:hover{
         border: 1px solid red;
        }
        .title1{
          width: 100%;
         
          height: 50px;
          text-align: center;
        }
        .title{
          width: 100%;
        
          height: 50px;
          text-align: center;
        }
        .thanhtoan{
          width: 90%;
          height: 200px;
    
          margin-left: 100px;
        }
     input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}
input[type="checkbox"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}
 input[type=submit] {
          background-color:#FE9A2E;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          margin-left: 50px;
          border: 2px solid #FE9A2E;
      
      }

      input[type=submit]:hover {
          background-color: #FAAC58;
          border: 2px solid #FE9A2E;
}


</style>
</head>
<body>
<div class="body">
    <div class="thongtin">
      <div class="title1">
        <strong>THÔNG TIN TOUR</strong>
      </div>
      
        <div class="tour">
            <div class="left">
                <div class="anh">
                  <p>đây là ảnh</p>
                </div>
            </div>
            <div class="right">
              <h2> tên tour</h2>
              <br />
              <br />
              <p> Ngày khởi hành: <strong>  </strong></p>
       
              <p> Số ngày: <strong>  </strong></p>
         
              <p> Số chỗ còn nhận: <strong>  </strong></p>
             
              <p> Giá: <strong>  </strong></p>
              
            </div>
        </div>
        <br />
           <p style="border-bottom: 2px dotted black;"></p>
        <br />
              <div class="title1">
      <strong>GIÁ TOUR CƠ BẢN</strong>
              </div>
      <br />
      
        <table cellspacing="0">
          <tr>
            <th> Người lớn (Từ 12 tuổi trở lên)</th>
            <th> Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</th>
             <th> Trẻ em (Từ 2 tuổi đến dưới 5 tuổi)</th>
          </tr>
          <tr>
            <th>Giá người lớn ở đây</th>
            <th>Giá trẻ em ở đây</th>
            <th>Giá trẻ em</th>
          </tr>
          <tr>
            
          </tr>
        </table>
        <br />
          <p style="border-bottom: 2px dotted black;"></p>
        <br />

        <div class="title1">
         <strong>THÔNG TIN LIÊN LẠC  </strong>
       </div>
         <div class="tour1">
         <div class="left1">
           <label for="fname">Họ Và Tên (<b style="color: red">*</b>)</label>
          <input type="text" id="name" name="name" placeholder="Nhập họ và tên...">

          <label for="country">Số Điện Thoại (<b style="color: red">*</b>)</label><br />
          <input type="number" id="phone" name="phone" placeholder="Nhập số điện thoại..." style="width: 595px">
          <br />
          <label for="address">Địa Chỉ</label>
          <input type="text" id="address" name="address" placeholder="Nhập địa chỉ...">

         </div>
         <div class="right1">
            <label for="lname">Email (<b style="color: red">*</b>)</label>
          <input type="text" id="email" name="email" placeholder="Nhập email...">
          <br />
          <br />
          <label for="songay">Người Lớn</label>
          <input type="number" id="songuoi" name="songuoi" min="1" max="">

          <label for="songay">Trẻ Em</label>
          <input type="number" id="songuoi" name="songuoi" min="1" max="">
            <br />
          
          <label for="songay">Tổng số khách</label>
          <input type="number"   name="songuoi" readonly="1">
          <br />


         </div>
         <div class="content">
           <label for="nguoilon">Ghi Chú</label><br />
          <textarea type="text" cols="171" rows="8" name="ketqua" id="ghichu" name="ghichu" placeholder=" Nhập nội dung..." ></textarea> 
          <br />
          <br />
          <br />

           <label for="songay">Tổng tiền:</label>
          <input type="number"   name="songuoi" readonly="1" style="width: 300px">
         </div>
         </div>
          <br />
             <p style="border-bottom: 2px dotted black;"></p>
          <br />
          <div class="title1">
          <strong>XIN QUÝ KHÁCH VUI LÒNG CHỌN HÌNH THỨC THANH TOÁN</strong>
        </div>
        <div class="thanhtoan">
          <form>
                  <input name="gioitinh" type="radio" value="Nam" />
                  <label for="credate">Tiền mặt</label>
                  
                  <br />
                  <br />
                  <input name="gioitinh" type="radio" value="Nữ" />
                  <label for="credate">Chuyển khoản</label>
                  <br />
                  
                  <br />
                  <input name="gioitinh" type="radio" value="Khác" />
                  <label for="credate">Thanh toán bằng quét QRcode</label>
          </form>


        </div>
         <p style="border-bottom: 2px dotted black;"></p>
         <br />
      <div class="title">
       
          <input type="submit" name="" value="Đặt tour">
        
      </div>
    </div>
   
      
  

     
  
    <div class="danhsachkhachhang">
      
    </div>
    <div class="hinhthucthanhtoan">
      
    </div>
    <div class="dieukhoan">
      
    </div>
</div>

</body>
</html>

@endsection