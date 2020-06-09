<?php
session_start();
?>
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hệ thống quản lý sức khỏe cho bác sĩ gia đình sử dụng công nghệ IoT</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="images/logo_health.ico"/>
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
<!-- //////////////////////////////////////////////////////////////// -->
<!-- ----------------------------- -->
<!-- <div class="containner">
  <div class="row">
  <div class="col-md-3">

  <div class="card" style="width:100%">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div> -->

<div class="row">
		<div class="col-sm-4 col-md-3 sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item active">
            Tin nổi bật
            <span class="pull-right" id="slide-submenu">
                <i class="fa fa-times"></i>
            </span>
        </span>
        <a href="#" class="list-group-item">
            <i class="fa fa-comment-o"></i> CoVid-19
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-search"></i> Tin tức
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-user"></i> Tư vấn
        </a>
        <a href="#" class="list-group-item">
        <i class="fa fa-user"></i> Dinh dưỡng
        </a>
        <a href="#" class="list-group-item">
        <i class="fa fa-user"></i> Khỏe đẹp
        </a>
        <a href="#" class="list-group-item">
            <i class="fa fa-envelope"></i> Vaccine
        </a>
    </div>  






<!-- --------------------------- -->
</div>
    <div class="col-md-6">
      <!-- Các bài đăng  -->
      <!-- One -->
      <div class="card" style="width:99%">
  <!-- <img class="card-img-top" src="images/phauthuat.jpg" alt="Card image"  > -->
  <div class="card-body">
    <h4 class="card-title">Phẫu thuật hai học sinh bị thương nặng do cây đổ </h4>
    <img class="news" src="images/phauthuat.jpg" >
    <p class="card-text"><span style="text-align: justify;">Hai học sinh bị gãy xương, vỡ khung chậu trong vụ cây đổ ở trường Bạch Đằng, được các bác sĩ bệnh viện Nhi Đồng 2 và Chấn thương chỉnh hình phẫu thuật thành công.</span></p>
    <a href="#" class="btn btn-primary">Xem thêm</a>
  </div>
</div>
<div  class="card" style="width:99%">
  <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
  <div class="card-body">
    <h4 class="card-title">42 ngày không lây nhiễm nCoV cộng đồng </h4>
    <img class="news"  src="images/covid.jpg" >
    <p class="card-text"><span style="text-align: justify;">6h ngày 28/5, Bộ Y tế không ghi nhận thêm ca dương tính nCoV, đánh dấu 42 ngày Việt Nam không lây nhiễm trong cộng đồng.</span>
.</p>
    <a href="#" class="btn btn-primary">Xem thêm</a>
  </div>
</div>
<div class="card" style="width:99%">
  <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
  <div class="card-body">
    <h4 class="card-title">Bác sĩ bế bụng bầu trong cuộc chiến Covid-19 </h4>
    <img class="news"  src="images/bacsi.jpg" >
    <p class="card-text"><span style="text-align: justify;">Nối máy thở cho một bệnh nhân Covid-19 nguy kịch, bác sĩ Zafia Anklesaria tự nhắc nhở bản thân phải luôn thận trọng, không được để lây nhiễm. Cô đang mang thai tháng thứ 7, con đầu lòng. </span></p>
    <a href="#" class="btn btn-primary">Xem thêm</a>
  </div>
</div>
       <!-- -------  -->
    </div>
    <!-- ------------------------------------------- -->
    <div class="col-md-3 form_dangnhap">
      <!-- phần đăng nhập -->
      <form method="GET"  class="dangnhap">
        <h3><center>Đăng nhập</center></h3>
        <div class="form-group">
      <label for="uname">Tên đăng nhập:</label>
      <input method='get' type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Vui lòng nhập tên đăng nhập.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input method='get' type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Ghi nhớ mật khẩu.
       
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_submit" >Đăng nhập</button>
</form>

<?php 
    if (isset($_GET['btn_submit']))
    {
         if ($_GET['username']=="")
            {
                echo "Vui long nhap ten nguoi dung";
            }
        else if ($_GET['password']==NULL){
            echo "Ban chua nhap mat khau";
        } else {
            $servername = "localhost";
            $username = "id13854778_healthcareute_thinhtuong";
            $password = "Anhthinh05111997...";
            $dbname = "id13854778_healthcareute";
            $u=$_GET['username'];
            $p=$_GET['password'];
            $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from user where user = '$u' and pass= '$p' ";
			$query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				// $_SESSION['username'] = $username;
				$URL="http://healthcareute.000webhostapp.com/quantrivien.php";
header ("Location: $URL");
                // header("Location: /tuvan.php");
			}
            // $sql = "SELECT id, user, pass FROM trangdich";
        }
    }
?>

        </form>
      <!-- kết phần đăng nhập -->
    </div>
  </div>
</div>


</body>
<div class="container line">
  
  </div>

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
<?php
ob_end_flush(); 
?>