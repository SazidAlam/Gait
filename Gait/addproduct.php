<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
// $conn = mysqli_connect("localhost", "root", "mysql", "gait");
// if($conn) {
// //if connection has been established display connected.
// echo "connected";
// }

  include "header.php";
  include "config.php";
  include "premium.php";
  //session_start();

//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
//folder where images will be uploaded
$folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);

$uname = $_SESSION['name'];
$name = $_POST['name'];
$body = $_POST['body'];
$link = $_POST['link'];
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `uploadedimage` (`uname`,`imagename`, `pname`, `body`, `link`)  VALUES ('$uname','$filename', '$name', '$body', '$link')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
  $message = "Product has been uploaded";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}

?>

