<?php require 'delovi/header.php'; ?>
<?php require 'ucenici/unesi.php'; ?>
<?php require 'delovi/ucenici_meni.php'; ?><br><br><hr><br>
<div class="container">
  <h3>Ispunjavanjem sledece forme, i na kraju pritiskom na dugme "UNESI UCENIKA" ubacujemo novog ucenika u  bazi podataka</h3><br><br>
  <form class="" action="#" method="POST">

    <input class="form-control form-control-lg" type="text" placeholder="Ubacite IME" aria-label=".form-control-lg example" name="ufname"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite PREZIME" aria-label=".form-control-lg example" name="ulname"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite JMBG" aria-label=".form-control-lg example" name="uJMBG"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite E-MAIL" aria-label=".form-control-lg example" name="E-mail"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite ODELJENJE" aria-label=".form-control-lg example" name="uodeljenje"><br>
    <input class="form-control form-control-lg" type="text" placeholder="Ubacite BR. TELEFONA" aria-label=".form-control-lg example" name="ubr_tel"><br>

    <div class="d-grid gap-2">
        <input type="submit" name="ubaci" value="UNESI UCENIKA" class="btn btn-primary ">
      </div>

  </form>
</div>
<?php require  'delovi/footer.php'; ?>
