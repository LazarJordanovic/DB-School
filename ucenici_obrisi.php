<?php require 'delovi/header.php'; ?>
<?php require 'delovi/ucenici_meni.php'; ?>
<br><br><hr><br>
<div class="container">
    <h3>Pritiskom na dugme "Prikazi ucenike za izmenu" izlistavaju se svi ucenici,pritiskom na dugmadi u desnom uglu tabele
      "Ispravi" i "Obrisi", koji sluze za ispravku i brisanje podataka.</h3><br><br>
    <form class="" action="#" method="POST">
      <input type="submit" name="prikazi" value="Prikzi ucenike za izmenu" class="btn btn-primary">
      <!-- <input type="submit" class="btn-check" id="btn-check" autocomplete="off" name="prikazi">
      <label class="btn btn-primary" for="btn-check">Single toggle</label> -->
      <?php require ('ucenici_update_delete.php'); ?>
    </form><br><hr><br>
</div>
<?php require 'delovi/footer.php'; ?>
