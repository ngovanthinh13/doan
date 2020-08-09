<?php 
    include_once 'connection.php';
$sql="select chidan from benhnhan limit 20"; 

// $response = array();
$x = array();
// $y = array();
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { 
  $chidan=$row['chidan']; 
//   $nhiptim=$row['nhiptim']; 
//   $mabn_id=$row['mabn'];
//   $x[] = array('title'=> $title, 'url'=> $url);
$x[] = array($chidan);
// $y[] = array($mabn_id);
} 

// $response[] =array($x);

$fp = fopen('results_note.json', 'w');
// fwrite($fp, json_encode($response));
fwrite($fp, json_encode($x));
fclose($fp);


?> 