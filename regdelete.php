<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM registration WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: regview.php"); 
?>