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
  session_start();

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

<html>
<head>
  <title>Gait</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"  href="assets/css/home.css">
    <link rel="stylesheet"  href="assets/css/main.css">
     <link rel="stylesheet"  href="assets/css/bootstrap.min.css">
     <link rel="stylesheet"  href="/fonts/style.css">
     <script src="assets/js/typed.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/3ec1573dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
        <div class="container">
          <a class="navbar-brand" href="index.php" style="font-family: 'Bree Serif', serif">GAIT</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav nav-pills justify-content-end">
          

          <li><a class="na" href="product.php">Home</a></li>
          <li><a class="na" href=">addproduct.php">Add Product</a></li>
          <li><a class="na" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <div>
  
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Share Title</label>
        <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control"></textarea>
      </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="uploadfile" />
        </div>
      <div class="form-group">
        <label>Link</label>
        <input type="text" name="link" class="form-control" />
      </div>
      <input class="btn btn-primary" type="submit" name="uploadfilesub" value="upload" />
        <a class="btn btn-danger" href="addproduct.php">Cancel</a>
    </form>
  </div>
  <!-- <form action="" method="post" enctype="multipart/form-data" > -->
<!--input tag for file types should have a "type" attribute with value "file"-->
<!-- <input type="file" name="uploadfile" /> -->
<!-- <input type="text" name="name" /> -->
<!-- <textarea name="body"></textarea> -->
<!-- <input type="text" name="link"/> -->
<!-- <input type="submit" name="uploadfilesub" value="upload" />
</form> -->
</div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

