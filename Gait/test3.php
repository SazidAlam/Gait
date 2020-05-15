<?php
include "header.php";
include "config.php";

session_start();

$nam = $_SESSION['name'];
echo $nam;
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
while ($row = mysqli_fetch_array($result)) {
   $list[] = $row['name'];
}


print_r($list);   

if (in_array($nam, $list)) : ?>
  <h3>done</h3>
  
<?php
else : ?>
  <h4>not done</h4>
 
 <?php endif; ?>
 


 


