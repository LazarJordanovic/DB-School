<?php


//Unos Podataka preko forme u bazu

if (isset($_POST['ubaci'])) {
  $fname = $_POST['ufname'];
  $lname = $_POST['ulname'];
  $jmbg = $_POST['uJMBG'];
  $email = $_POST['E-mail'];
  $odelj = $_POST['uodeljenje'];
  $tel = $_POST['ubr_tel'];


  require 'inc/connect.php';

  $fname = mysqli_real_escape_string($conn, $fname);
  $lname = mysqli_real_escape_string($conn, $lname);
  $jmbg = mysqli_real_escape_string($conn, $jmbg);
  $email= mysqli_real_escape_string($conn, $email);
  $odelj= mysqli_real_escape_string($conn, $odelj);
  $tel = mysqli_real_escape_string($conn, $tel);


  if (!empty($fname) && !empty($lname) && !empty($jmbg) && !empty($email) && !empty($odelj) && !empty($tel) ) {


        $upit = "INSERT INTO ucenici (ufname, ulname, uJMBG, email, uodeljenje, ubr_tel) VALUES ('{$fname}','{$lname}', '{$jmbg}' , '{$email}' , '{$odelj}', '{$tel}' )";

        mysqli_query($conn, $upit);

        echo "Podaci uspesno uneti...";
  }else {
    echo "Podaci nisu uneti sva polja moraju biti ispunjeni";
  }
}

?>
