<?php
session_start();
// $check = $_SESSION['mabs'];
$check_mabn = $_SESSION['mabn'];
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
            margin: auto 0 0 0;
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
        .title_chiso{
            margin: 10px auto;
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
    <li><a class="active" href="https://healthcareute.000webhostapp.com/">Trang chủ</a></li>
    <!-- <li><a href="#news">Tin nổi bật</a></li> -->
    <li><a href="https://hososuckhoe.net/co-so-y-te/benh-vien-da-khoa-huyen-binh-son-quang-ngai_cskcb997.html">Liên hệ</a></li>
    <li><a href="http://trungtamytebinhson.com/">Giới thiệu</a></li>
    <li><a href="https://healthcareute.000webhostapp.com/">Đăng xuất</a></li>
  </ul>
<!--</br>-->
</div>
<!---->
<?php
    if($check_mabn=='')
    {
        echo "<center>Ban không được quyền truy cập</center>";
        die();
    }
    

?>


<div class="container-fluid">
<div class="col-12">
        <h3 class="title_chiso"><center>THÔNG TIN CHỈ SỐ SỨC KHỎE</h3></center>
        <table><tr>
<?php
    $sql = "select * from thongso where mabn = '$check_mabn'";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        echo "
        <th><center>Mã bệnh nhân</center></th>
        <th><center>Ngày</center></th>
        <th><center>Giờ</center></th>
        <th><center>Nhịp tim</center></th>
        <th><center>Nồng độ oxy</center></th>
        <th><center>Nhiệt độ</center></th>
        <th><center>Độ ẩm</center></th>
        </tr>";
        echo "<tr>";
        while($row = $result->fetch_assoc()) {
            echo "<td><center>" . $row["mabn"].
            "</td><td><center>" . $row["ngay"]. 
            "</td><td><center>" . $row["gio"]. 
            "</td><td><center>"
                ; 
				if ($row["nhiptim"] > 120 || $row["nhiptim"] < 40){
					echo "<div class='p-3 mb-2 bg-danger text-white'>".$row["nhiptim"] ."</div>";
				} else echo $row["nhiptim"];
		
            echo 
            "</td><td><center>";
            if ($row["oxy"] < 85){
					echo "<div class='p-3 mb-2 bg-warning text-dark'>".$row["oxy"] ."</div>";
				} else echo $row["oxy"];
            echo  
            "</td><td><center>" . $row["nhietdo"].
            "</td><td><center>".$row["doam"].
            "</center></tr>";
        }
    
} else echo "<center>Không có dữ liệu</center>"

?>
</table>
</div>
</div>


<!---->
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
