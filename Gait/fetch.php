

<?php
include "config.php";
include "header.php";
session_start();

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM uploadedimage
	WHERE pname LIKE '%".$search."%'
	OR link LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM uploadedimage";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	// $output .= '<div class="table-responsive">
	// 				<table class="table table bordered">
	// 					<tr>
	// 						<th>Product Name</th>
	// 						<th>Category</th>
							
	// 						<th>Product Image</th>
	// 						<th>About Product</th>
	// 					</tr>';
	while($row = mysqli_fetch_array($result)) :?>
	<div class="product">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2"><h4><?php echo $row['pname']; ?></h4></div>
          <div class="col-lg-3 col-md-3"><?php echo '<img src="imagesuploadedf/'.$row['imagename'].'" height="200" width="200" >'; ?></div>
          <div class="col-lg-2 col-md-2"><h4><?php echo $row['link']; ?></h4></div>
          <div class="col-lg-3 col-md-3"><p><?php echo $row['body']; ?></p></div>
          <div class="col-lg-2 col-md-2">
            <button class="btn btn-default">Link</button>
          </div>
        </div>
      </div>
    </div>
    <hr>
	<?php
	endwhile;
	// echo $output;
}
else
{
	echo 'Data Not Found';
}
?>




