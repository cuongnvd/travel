<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
#foot{

    border-top:0px solid #999; 
    height:200px;
    margin: center;
    text-align: left; 
    width:auto;
    font-size: 15px;
    margin-bottom: -15px;
    background: #D8D8D8;
    padding-top: 20px;
    padding-left: 120px;

}

    #foot a{
        color: #848484;
        line-height: 25px;
   text-decoration: none;


    }
    #foot a:hover{
        color: black;
    }

    #foot p{
        line-height: 20px;
        color: black;
        }
        h3{
            color: black;
        }
</style>
</head>
<body>



    

    <div id="foot">


            
        
        <table style="width: 100%">
                <div style="display: inline-table;width: 35%;">
                    <h3> Về FTravel</h3>
                    <a href="{{route('index')}}">Giới thiệu </a>
                    <br>
                    <a href="{{route('lienhe')}}" target="_blank">Liên hệ </a>
                    <br>

                </div>
                <div style="display: inline-table;width: 35%">
                    <h3> Thông Tin Cần Biết</h3>
                    <a href="#">Điều khoản </a>
                    <br>
                   <!--  <a href="#">Quy chế hoạt động </a>
                    <br> -->
                    <a href="{{route('hotrothanhtoan')}}" target="_blank">Hướng dẫn thanh toán </a>
                    <br>
                    <a href="">Chính sách phụ thu</a>

                </div>
               
                
                <div style="display: inline-table;width: 30%">
                    <h3> Bạn cần trợ giúp? Hãy gọi ngay</h3>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i>  CSKH: <a> 0987654321 </a> </p>
                   <p>  <i class="fa fa-phone" aria-hidden="true"></i>  Hotline: <a> 0906 355 542 </a></p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> Từ 8h30 - 18h hằng ngày</p>
                    <p>
                        <br />
                    <a href="https://www.facebook.com/cuongck21" target="_blank"> <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a> &emsp;&emsp;
                    <a href="https://www.youtube.com" target="_blank"> <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>&emsp; &emsp;
                    <a href="#" target="_blank"> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </p>
                    <br>    
                </div>
        </table>


    </div>
    





</body>
</html>

