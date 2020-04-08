<?php
$connect = mysqli_connect("localhost", "root", "mysql", "gait");
$output = '';
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
    SELECT * FROM uploadedimage
    WHERE name LIKE '%".$search."%'
    ";
}
else
{
    $query = "
    SELECT * FROM uploadedimage";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            
                            <th>Postal Code</th>
                            <th>Country</th>
                        </tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
            <tr>
                <td>'.$row["name"].'</td>
                <td>'.$row["body"].'</td>
                
                <td>'.'<img src="imagesuploadedf/'.$row['imagename'].'" height="150" width="150" >'.'</td>
                <td>'.$row["link"].'</td>
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




