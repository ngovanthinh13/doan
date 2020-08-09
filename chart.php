<?php header('Content-Type: application/json; charset=utf-8'); ?>
<?php
session_start();
// $check = $_SESSION['mabs'];
$check_mabn = $_SESSION['mabn_s'];
?>

 
<?php
    include_once 'connection.php';
    //address of the server where db is installed

    $sql1 = "SELECT nhiptim, oxy, nhietdo, doam, ngay, gio FROM thongso WHERE mabn='$check_mabn'";
                        $result1 = $conn->query($sql1);
                        $jsonArray = array();
                        if ($result1->num_rows > 0) {
  // output data of each row
                            while($row = $result1->fetch_assoc()) {
                                    $jsonArrayItem = array();
                                    $jsonArrayItem['ngay'] = $row['ngay'];
                                    // $jsonArrayItem['gio'] = $row['gio'];
                                    $jsonArrayItem['nhiptim'] = $row['nhiptim'];
                                    $jsonArrayItem['oxy'] = $row['oxy'];
                                    $jsonArrayItem['nhietdo'] = $row['nhietdo'];
                                    $jsonArrayItem['doam'] = $row['doam'];
                                    array_push($jsonArray, $jsonArrayItem);
                            }
                        } 
                        echo json_encode($jsonArray);
?>