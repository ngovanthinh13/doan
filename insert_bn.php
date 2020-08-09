<?php
session_start();
$check = $_SESSION['mabs'];
?>
<?php
ob_start();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="images/logo_health.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <style>
        .btn-datlich {
            margin: 8px 0 0 0;
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
            </ul>
            </br>
        </div>
        <?php
if ($check==''){
    echo "<center>Bạn không có quyền truy cập</center>";
    exit();
}

?>
        <h3>
            <center>THÊM BỆNH NHÂN MỚI
        </h3>
        </center>
        </br>
        <!---->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <form class="col-md-6" method='post'>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhập mã bệnh nhân: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Mã bệnh nhân" name='mabn'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Mật khẩu bệnh nhân: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Mật khẩu bệnh nhân" name='mkbn'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Họ tên bệnh nhân: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Họ tên bệnh nhân" name='hoten'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Ngày sinh </label>
                            <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd"> <input name="ngaysinh" class="form-control" readonly="" type="date"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>

                            <script type="text/javascript">
                                $(function() {
                                    $("#datepicker").datepicker({
                                        autoclose: true,
                                        todayHighlight: true
                                    }).datepicker('update', new Date());
                                });
                            </script>
                        </div>
                        <!--</div>-->
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nhập tuổi: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Tuổi bệnh nhân" name='tuoi'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Địa chỉ: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Địa chỉ bệnh nhân" name='diachi'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nghề nghiệp: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nghề bệnh nhân" name='nghenghiep'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Người thân: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Người thân bệnh nhân" name='nguoithan'>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Chỉ dẫn: </label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Chỉ dẫn" name='chidan'>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ghi chú: </label>
                                <input type="text" class="form-control" id="inputCity" name="ghichu">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Bác sĩ phụ trách: </label>
                                <select id="inputState" class="form-control" name="mabs">
                                    <option selected>...</option>
                                    <option value="bs001">Nguyễn Văn A - BS001</option>
                                    <option value="bs002">Nguyễn Văn B - BS002</option>
                                    <option>...</option>
                                </select>
                                <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary btn-datlich" name="submit">Thêm</button>
                            </div>
                            </div>
                            
                            
                        </div>
                        <!-- php them thong tin  -->
                        <?php
                        if (isset($_POST['submit'])) {
                            $mabn = addslashes($_POST['mabn']);
                            $mkbn = addslashes($_POST['mkbn']);
                            $hoten = addslashes($_POST['hoten']);
                            $ngaysinh = addslashes($_POST['ngaysinh']);
                            $tuoi = addslashes($_POST['tuoi']);
                            $diachi = addslashes($_POST['diachi']);
                            $nghenghiep = addslashes($_POST['nghenghiep']);
                            $nguoithan = addslashes($_POST['nguoithan']);
                            $mabs = addslashes($_POST['mabs']);
                            $chidan = addslashes($_POST['chidan']);
                            // $gio = addslashes($_GET['gio']);
                            $ghichu = addslashes($_POST['ghichu']);
                            // echo addslashes($_GET['mabn']). addslashes($_GET['mabs']) . addslashes($_GET['ngay']) .addslashes($_GET['gio']) .addslashes($_GET['ghichu']);
                            // $result = $conn->query($sql);
                            
                            $sql = "INSERT INTO benhnhan (mabn, mkbn, hoten, ngaysinh, tuoi, diachi, nghenghiep,mabs, nguoithan, ghichu, chidan)
                                    VALUES ('".$mabn. "','".$mkbn. "','".$hoten. "','".$ngaysinh. "','".$tuoi."' ,'".$diachi."','".$nghenghiep."','".$mabs."','".$nguoithan."','".$ghichu."','".$chidan."'
                                    )";

                            if ($conn->query($sql) === TRUE) {
                                echo "Bạn đã gửi thành công";
                            } else {
                                echo "Gửi không thành công";
                                header("Refresh:3");
                            }
                            
                        }

                        ?>
                        <!--<button type="submit" class="btn btn-primary">Đặt lịch</button>-->
                    </div>
                </form>
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
<?php
ob_end_flush();
?>