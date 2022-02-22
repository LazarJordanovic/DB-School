<?php require 'delovi/header.php'; ?>
<?php require 'nastavnici_azuriraj/azuriraj.php'; ?>
<?php require 'delovi/nastavnici_meni.php' ?><br><br><hr><br>
<div class="container">
  <h3>Ispunjavanjem sledece forme, i na kraju pritiskom na dugme "UPLOAD" ubacujemo novog nastavnika u  bazi podataka</h3><br><br>
  <form class="" action="#" method="POST">

    <input class="form-control form-control-lg" type="text" placeholder="Ubacite IME" aria-label=".form-control-lg example" name="fname"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite PREZIME" aria-label=".form-control-lg example" name="lname"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite JMBG" aria-label=".form-control-lg example" name="JMBG"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite BR. TELEFONA" aria-label=".form-control-lg example" name="br_tel"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite NAZIV PREDMETA" aria-label=".form-control-lg example" name="naziv_predmeta"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite ODELJENE" aria-label=".form-control-lg example" name="odeljenje"><br>

    <div class="d-grid gap-2">
        <input type="submit" name="ubaci" value="UNESI NASTAVNIKA" class="btn btn-primary ">
      </div>

  </form>
</div>
<?php require  'delovi/footer.php'; ?>
