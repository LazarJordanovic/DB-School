<?php


//Unos Podataka preko forme u bazu

if (isset($_POST['ubaci'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $jmbg = $_POST['JMBG'];
  $tel = $_POST['br_tel'];
  $pred = $_POST['naziv_predmeta'];
  $odelj = $_POST['odeljenje'];

  require 'inc/connect.php';

  $fname = mysqli_real_escape_string($conn, $fname);
  $lname = mysqli_real_escape_string($conn, $lname);
  $jmbg = mysqli_real_escape_string($conn, $jmbg);
  $tel = mysqli_real_escape_string($conn, $tel);
  $pred= mysqli_real_escape_string($conn, $pred);
  $odelj= mysqli_real_escape_string($conn, $odelj);


  if (!empty($fname) && !empty($lname) && !empty($jmbg) && !empty($tel) && !empty($pred) && !empty($odelj)) {


        $upit = "INSERT INTO nastavnici(fname, lname, JMBG, br_tel, naziv_predmeta, odeljenje) VALUES ('{$fname}','{$lname}', '{$jmbg}' , '{$tel}' , '{$pred}' , '{$odelj}')";

        mysqli_query($conn, $upit);

        echo "Podaci uspesno uneti...";
  }else {
    echo "Podaci nisu uneti sva polja moraju biti ispunjeni";
  }
}

?>
