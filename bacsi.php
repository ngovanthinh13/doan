<?php
session_start();
?>

<?php
    require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hệ thống quản lý sức khỏe cho bác sĩ gia đình sử dụng công nghệ IoT</title>
  <link rel="stylesheet" type="text/css" href="stype.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="images/logo_health.ico"/>

<style type="text/css">
        table, th, td{
            border:1px solid #868585;
        }
        table{
            border-collapse:collapse;
            
            width:100%;
        }
        th, td{
            text-align:left;
            padding:10px;
        }
        table tr:nth-child(odd){
            background-color:#eee;
        }
        table tr:nth-child(even){
            background-color:white;
        }
        table tr:nth-child(1){
            background-color:skyblue;
        }
    </style>
</head>
<body>
<div class="containner">
  <div class="row">
    <div class="col-md-1 header">
    </div>
    <div class="col-md-2 header">
    <img src="images/logo_health111.png" height="150px" width="150px" align="bottom">
    </div>
    
    <div class="col-md-8 header">
    
    <h1 class="title_1">
    Hệ thống quản lý sức khỏe cho bác sĩ gia đình sử dụng công nghệ IoT</h1>
    </div>
    <div class="col-md-1 header"></div>
  </div>
<!-- </div>
  <!-- <div class='header'> -->
  
<!-- </div> -->
<div class="menu">
  <ul>
    <li><a class="active" href="#home">Trang chủ</a></li>
    <!-- <li><a href="#news">Tin nổi bật</a></li> -->
    <li><a href="#contact">Liên hệ</a></li>
    <li><a href="#about">Giới thiệu</a></li>
  </ul>
</br>
</div>
<!--////////////-->
</div>

<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              
              <div class="row">
                <div class="col-3">
                <!-- <nav class="navbar navbar-light bg-light"> -->
                  <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
                  </form>
                <!-- </nav> -->
<!-- ///////////////////////////////// -->
                    <h4>
                      Kiểm tra lịch hẹn
                    </h4>
                    <div class="mobile-wrapper">

   <!--======= Header =======-->

   <!--<header class="header">-->
   <!--   <div class="container">-->
         <span>Welcome Back!</span>
         <h1>Calendar Plan</h1>

         <div class="menu-toggle">
            <div>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
   <!--   </div>-->
   <!--</header>-->

   <!--======= Today =======-->

   <section class="today-box" id="today-box">
      <span class="breadcrumb">Today</span>
      <h3 class="date-title">May 15, 2018</h3>

      <div class="plus-icon">
         <i class="ion ion-ios-add"></i>
      </div>
   </section>

   <!--======= Upcoming Events =======-->

   <section class="upcoming-events">
      <div class="container">
         <h3>
            Lastest Events

         </h3>
         <div class="events-wrapper">
            <div class="event">
               <i class="ion ion-ios-flame hot"></i>
               <h4 class="event__point">11:00 am</h4>
               <span class="event__duration">in 30 minutes.</span>
               <p class="event__description">
                  Monday briefing with the team (...).
               </p>
            </div>
           
         </div>
         <button class="add-event-button">
            <span class="add-event-button__title">Add Event</span>

            <span class="add-event-button__icon">
               <i class="ion ion-ios-star-outline"></i>
            </span> 


         </button>
      </div>
   </section>
</div>
</div>





                <!-- //////////////////////////// -->
                
 <div class="col-9">
                <h4 class="card-title">Data table</h4>
                  <!--<div class="table-responsive">-->
                    
<?php
    $sql = "SELECT id, mabn, hoten, ngaysinh, tuoi, diachi, nghenghiep, nguoithan, ghichu FROM benhnhan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Id</th>
    <th>Mã bệnh nhân</th>
    <th>Họ và tên</th>
    <th><center>Ngày sinh</center></th>
    <th><center>Tuổi</center></th>
    <th><center>Địa chỉ</center></th>
    <th><center>Nghề nghiệp</center></th>
    <th><center>Người thân</center></th>
    <th><center>Ghi chú</center></th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. 
        "</td><td>" . $row["mabn"].
        "</td><td>" . $row["hoten"]. 
        "</td><td>" . $row["ngaysinh"]. 
        "</td><td>" . $row["tuoi"]. 
        "</td><td>" . $row["diachi"].
        "</td><td><center>".$row["nghenghiep"].
        "</td><td>" . $row["nguoithan"]. 
        "</td><td>" . $row["diachi"].
        "</tr><br>";
    }
    echo "</table>";
}
?>
                    
                                       
                  </div>
                </div>
              <!--</div>-->
            </div>
          </div>
</div>

<!--/////-->

<!--////////////-->
</body>
<!-- footer -->
<div>
  <!-- Site footer -->
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>Về chúng tôi</h6>
          <p class="text-justify">Cổng điện tử quản lý hồ sơ bệnh án bệnh nhân cũng như cung cấp các dịch vụ chăm sóc sức khỏe cho người dân.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Dịch vụ</h6>
          <ul class="footer-links">
            <li><a href="datlich.php">Đặt lịch</a></li>
            <li><a href="tuvan.php">Tư vấn</a></li>
            <!--<li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>-->
            <!--<li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>-->
            <!--<li><a href="http://scanfcode.com/category/android/">Android</a></li>-->
            <!--<li><a href="http://scanfcode.com/category/templates/">Templates</a></li>-->
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Liên hệ</h6>
          <ul class="footer-links">
            <li><a href="#">Điện thoai: 0397903057</a></li>
            <li><a href="#">Địa chỉ: 72 Phạm Văn Đồng, Quảng Ngãi</a></li>
            <li><a href="#">Emal: luonchomotdieu@gmail.com</a></li>
            <!--<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>-->
            <!--<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>-->
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
       <a href="#">Scanfcode</a> Edit by Ngo Van Thinh.
          </p>
        </div>

        <!-- <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
          </ul>
        </div> -->
      </div>
    </div>
</footer>
<!-- ------ -->
  </div>
</html>
