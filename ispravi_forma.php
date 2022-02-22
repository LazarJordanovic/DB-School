<?php require 'delovi/header.php'; ?>
<?php require 'delovi/nastavnici_meni.php'; ?><br><br><hr><br>
<div class="container">
<h2 class="text-center">U ovoj formi se mogu izvrsite sve ispravke podataka.</h2><br><br>
<form class="" action="ispravi_n_kod.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
  <label for="" style="font-size: 25px">Ispravi ime:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="fname" value="<?php echo $result['fname']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi prezime:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="lname" value="<?php echo $result['lname']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi JMBG:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="JMBG" value="<?php echo $result ['JMBG']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi broj telefona:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="br_tel" value="<?php echo $result['br_tel']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi naziv predmeta:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="naziv_predmeta" value="<?php echo $result['naziv_predmeta']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi odeljenje:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="odeljenje" value="<?php echo $result['odeljenje']; ?>"><br>
  <button type="submit" class="btn btn-primary  d-grid gap-2">IZMENI UNOS</button>



</form>
</div>
<?php require 'delovi/footer.php'; ?>
