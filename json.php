<?php 
    include_once 'connection.php';
$sql="select * from thongso limit 20"; 

$response = array();
$x = array();
$y = array();
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { 
  $ngay=$row['ngay']; 
  $nhiptim=$row['nhiptim']; 
  $mabn_id=$row['mabn'];
//   $x[] = array('title'=> $title, 'url'=> $url);
$x[] = array($ngay, $nhiptim);
$y[] = array($mabn_id);
} 

$response[] =array($x,$y);

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);


?> 