<?php
session_start();
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="images/logo_health.ico"/>
    <style>
        .btn-datlich {
            margin: 8px 0 0 0;
        }
    </style>
</head>

<body>
   <section class="today-box" id="today-box">
      <!--<span class="breadcrumb">Today</span>-->
      <form method="get">
      <h3 class="date-title" id="myFunction" name="ngaygio"><center></center></h3>
      <h3 class="date-title" id="myFunction1" name="ngay"><center></center></h3>
      <h3 class="date-title" id="myFunction2" name="gio"><center></center></h3>
      
      
      
</form>


 <?php
                        if (isset($_GET['submit'])) {
                            $mabn = addslashes($_GET['mabn']);
                            $ngay = addslashes($_GET['ngay']);
                            $gio = addslashes($_GET['gio']);
                            
                            $nhiptim = addslashes($_GET['nhiptim']);
                            $oxy = addslashes($_GET['oxy']);
                            $nhietdo = addslashes($_GET['nhietdo']);
                            $doam = addslashes($_GET['doam']);
                            // echo addslashes($_GET['mabn']). addslashes($_GET['mabs']) . addslashes($_GET['ngay']) .addslashes($_GET['gio']) .addslashes($_GET['ghichu']);
                            // $result = $conn->query($sql);
                            
                            $sql = "INSERT INTO thongso (mabn, ngay, gio, nhiptim, oxy, nhietdo, doam)
                                    VALUES ('".$mabn. "','".$ngay. "','".$gio. "','".$nhiptim. "','".$oxy."' ,'".$nhietdo."','".$doam."'  
                                    )";

                            if ($conn->query($sql) === TRUE) {
                                echo "SUCCESS";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                            
                        }

                        ?>
            <!--///////////////-->

      <script>
   var today = new Date();
   var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
   var time = today.getHours() + ":" + today.getMinutes() ;
   var dateTime = date+' '+time;
 
   document.getElementById("myFunction").innerHTML = dateTime;
   document.getElementById("myFunction1").innerHTML = date;
   document.getElementById("myFunction2").innerHTML = time;
</script>
</body>   
</html>
<?php
ob_end_flush();
?>