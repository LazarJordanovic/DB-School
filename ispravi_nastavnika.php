<?php
if (isset($_GET['id'])) {

require 'inc/connect.php';
$id = $_GET['id'];
$upit = "SELECT * FROM nastavnici WHERE id = $id";
$query = mysqli_query($conn, $upit);
$result = mysqli_fetch_assoc($query);
}
require 'ispravi_forma.php';
 ?>
