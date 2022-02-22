<?php require 'delovi/header.php'; ?>
<?php require 'delovi/ucenici_meni.php'; ?><br><br><hr><br>
<div class="container">
<h2 class="text-center">U ovoj formi se mogu izvrsite sve ispravke podataka.</h2><br><br>
<form class="" action="ispravi_u_kod.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
  <label for="" style="font-size: 25px">Ispravi ime:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="ufname" value="<?php echo $result['ufname']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi prezime:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="ulname" value="<?php echo $result['ulname']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi JMBG:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="uJMBG" value="<?php echo $result['uJMBG']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi email:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="email" value="<?php echo $result['email']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi odeljenje:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="uodeljenje" value="<?php echo $result['uodeljenje']; ?>"><br>
  <label for="" style="font-size: 25px">Ispravi br telefona:</label><br>
  <input class="form-control form-control-lg" type="text" aria-label=".form-control-lg example" name="ubr_tel" value="<?php echo $result['ubr_tel']; ?>"><br>
  <button type="submit" class="btn btn-primary  d-grid gap-2">IZMENI UNOS</button>



</form>
</div>
<?php require 'delovi/footer.php'; ?>
