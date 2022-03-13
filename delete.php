<?php 

require 'base_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM first_table WHERE id = $id";
$query = mysqli_query($db,$sql);



header("Location: index.php")
?>