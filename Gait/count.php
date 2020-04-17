<?php
include "header.php";
include "config.php";

// session_start();

$count = 1;
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
	$count = $count + 1;
}

 $count = $count * 25;   
 echo $count;

$countt = 1;
$queryy = "SELECT * FROM user";
$resultt = mysqli_query($conn, $queryy);
$roww = mysqli_fetch_array($resultt);
while ($row = mysqli_fetch_array($resultt)) {
	$countt = $countt + 1;
}

 $countt = $countt;   
 echo $countt;


 ?> 