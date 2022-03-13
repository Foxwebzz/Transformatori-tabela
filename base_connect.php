<?php 

// $server = "sql303.epizy.com";
// $username = "epiz_31274117";
// $password = "qwPNOxV2DcccdFe";
// $dbname = "epiz_31274117_kolektor_etra";
$db = mysqli_connect("localhost", "root", "", "kolektor_etra") or die("Connection Error!");

$sql = "SELECT * FROM first_table";

$query = mysqli_query($db, $sql);

$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// dd($result);

?>

