<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'skola';

$conn = mysqli_connect($serverName, $username,$password,$dbName);

if ($conn == FALSE) {
  echo "Neuspesno uspostavljanje veze";
}
