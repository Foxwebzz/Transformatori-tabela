<?php 

require 'base_connect.php';

$brojPonudeKeb = $_POST['brojPonudeKeb'];
$brojPonudeKelp = $_POST['brojPonudeKelp'];
$brojPonudeKelt = $_POST['brojPonudeKelt'];
$snaga = $_POST['snaga'];
$primar = $_POST['primar'];
$sekundar = $_POST['sekundar'];
$regulacija = $_POST['regulacija'];
$sprega = $_POST['sprega'];
$uk = $_POST['uk'];
$hladjenje = $_POST['hladjenje'];
$zemlja = $_POST['zemlja'];
$komercijalista = $_POST['komercijalista'];
$kupac = $_POST['kupac'];
$datum = $_POST['datum'];
$projektant = $_POST['projektant'];
$napomena = $_POST['napomena'];


$sql = "INSERT INTO first_table VALUES (NULL, '$brojPonudeKeb', '$brojPonudeKelp', '$brojPonudeKelt', '$snaga', '$primar', '$sekundar', '$regulacija', '$sprega', '$uk', '$hladjenje', '$zemlja', '$komercijalista', '$kupac', '$datum', '$projektant', '$napomena' )";

$query = mysqli_query($db, $sql);

header("Location: index.php")

?>