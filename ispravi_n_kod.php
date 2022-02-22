<?php
if (isset($_POST['id'])) {


require 'inc/connect.php';
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$jmbg = $_POST['JMBG'];
$br_tel = $_POST['br_tel'];
$pred = $_POST['naziv_predmeta'];
$odelj = $_POST['odeljenje'];

$upit = "UPDATE nastavnici SET fname = '$fname', lname= '$lname', JMBG = '$jmbg', br_tel = '$br_tel',
          naziv_predmeta = '$pred', odeljenje = '$odelj' WHERE id= $id";

$query = mysqli_query($conn, $upit);
}
header('Location: prikaz1.php');

 ?>
