<?php
if (isset($_GET['id'])) {


require 'inc/connect.php';
$id = $_GET['id'];
$upit = "DELETE FROM ucenici WHERE  id = $id";
$result = mysqli_query($conn, $upit);
header('Location: ucenici_obrisi.php');
}
 ?>
