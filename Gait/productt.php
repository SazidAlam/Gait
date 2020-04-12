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

$query = "SELECT * FROM uploadedimage";

$result = mysqli_query($conn, $query);

// while($row=mysqli_fetch_array($result)) {
//     $img = $row['imagename'];
//     $name = $row['name'];
//     $body = $row['body'];
//     $link = $row['link'];

//     echo $name;
//     echo $body;
//     echo $link;
//     echo '<img src="imagesuploadedf/'.$img.'" height="150" width="150" >';
//     }


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
          <li><a class="na" href="addproduct.php">Add Product</a></li>
          <li><a class="na" href="profile.php">Welcome <?php echo $_SESSION['name']; ?></a></li>
          <li><a class="na" href="logout.php">Logout</a></li>
          
          </ul>
          </div>
    </nav>

    <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
        </div>
      </div>
      <br />
      <div id="result"></div>

    <div>
     <?php 

    while($row=mysqli_fetch_array($result))   : ?>
    
    <div class="well">
      <h3><?php echo $row['name']; ?></h3>
      <small><?php echo $row['body']; ?></small>
      <hr />
      <p><?php echo $row['body']; ?></p>
      <br />

      <?php echo '<img src="imagesuploadedf/'.$img.'" height="150" width="150" >'; ?>
      <a class="btn btn-default" href="<?php echo $row['link']; ?>" target="_blank">Go To Website</a>
    </div>
    
    <?php $img = $row['imagename']; endwhile; ?>

    
    </div>
  

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

<script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"product.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>

