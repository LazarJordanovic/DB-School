
<?php require 'delovi/header.php'; ?>
<?php require 'delovi/nastavnici_meni.php' ?><br><br><hr><br>
<div class="container">
    <h3>Pritiskom na dugme "Prikazi nastavnike" izlistavaju se svi nastavnici koji su u bazi podataka.</h3><br><br>
    <form class="" action="#" method="POST">
      <div class="row">

    <div class="col-sm-6">


      <input type="submit" name="prikazi" value="Prikazi nastavnike" class="btn btn-primary">
      <!-- <input type="submit" class="btn-check" id="btn-check" autocomplete="off" name="prikazi">
      <label class="btn btn-primary" for="btn-check">Single toggle</label> -->

    </form>
</div>
    <div class=" col-sm-6">
    <form class="" action="pretrazi_nastavnike.php" method="post">
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Pretrazi bazu nastavnika" aria-label="Recipient's username" aria-describedby="button-addon2" name="search">
      <button class="btn btn-info" type="submit" id="button-addon2" name="submit">Pretrazi</button>
    </div>
    </form>
    </div>
  </div>


    <?php include ('nastavnici_prikaz/prikazi.php'); ?>
</div>
<br><hr><br>
  <?php require 'delovi/footer.php'; ?>
