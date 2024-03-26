<?php
$id = $_REQUEST['id'];
$con=mysqli_connect("localhost","root","","pullo");
$query = "delete from product_details where id = '$id'";
$result = mysqli_query($con,$query);
if($result)
{
header('location:viewproduct.php');
}

