<?php
if (isset($_GET['id'])) {


require 'inc/connect.php';
$id = $_GET['id'];
$upit = "DELETE FROM nastavnici WHERE  id = $id";
$result = mysqli_query($conn, $upit);
header('Location: nastavnici_obrisi.php');
}
 ?>
