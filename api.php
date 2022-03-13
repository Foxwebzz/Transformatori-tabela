<?php 
require 'base_connect.php';

$term = $_POST['info'];

$sql = "SELECT * FROM first_table WHERE projektant LIKE '%$term%'"; // selektovana samo jedna kolona $term je varijabla koja ima ajax u sebi.


$query = mysqli_query($db, $sql);
$infoAll = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo json_encode($infoAll);
?>