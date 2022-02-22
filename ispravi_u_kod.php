<?php
require 'inc/connect.php';
$id = $_POST['id'];
$fname = $_POST['ufname'];
$lname = $_POST['ulname'];
$jmbg = $_POST['uJMBG'];
$email = $_POST['email'];
$odelj = $_POST['uodeljenje'];
$tel = $_POST['ubr_tel'];

$upit = "UPDATE ucenici SET ufname = '$fname', ulname= '$lname', uJMBG = '$jmbg',
          email = '$email', uodeljenje = '$odelj', ubr_tel = '$tel' WHERE id= $id";

$query = mysqli_query($conn, $upit);
header('Location: ucenici_tabela.php');

 ?>
