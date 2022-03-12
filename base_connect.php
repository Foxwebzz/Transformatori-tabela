<?php 
require 'helpers.php';

$db = mysqli_connect("localhost", "root", "", "kolektor_etra") or die("Connection Error!");

$sql = "SELECT * FROM first_table";

$query = mysqli_query($db, $sql);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// dd($result);

?>

