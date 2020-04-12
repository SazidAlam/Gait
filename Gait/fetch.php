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
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Product Name</th>
							<th>Category</th>
							
							<th>Product Image</th>
							<th>About Product</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["pname"].'</td>
				<td>'.$row["link"].'</td>
				
				<td>'.'<img src="imagesuploadedf/'.$row['imagename'].'" height="150" width="150" >'.'</td>
				<td>'.$row["body"].'</td>
			</tr>

		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>




