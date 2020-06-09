<?php 
    $servername = "localhost";
    $username = "id13854778_healthcareute_thinhtuong";
    $password = "Anhthinh05111997...";
    $dbname = "id13854778_healthcareute";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>