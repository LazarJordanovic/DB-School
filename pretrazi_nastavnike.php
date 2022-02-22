<?php
require 'delovi/header.php';
require 'delovi/nastavnici_meni.php';?><br><br>
<?php
require 'inc/connect.php';
if (isset($_POST['submit'])) {
  // code...

$search_value=$_POST["search"];

if($conn->connect_error){
    echo 'Nije konektovan sa bazom: '.$conn->connect_error;
    }else{
        $upit="SELECT * FROM nastavnici WHERE fname LIKE '%$search_value%'";

        $result = mysqli_query($conn, $upit);

        if (mysqli_num_rows($result)>0) {
          echo "<h3 class=' text-center'>Prikaz trazenog ucenika</h3><br>";
          echo '<table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">Ime</th>
                      <th scope="col">Prezime</th>
                      <th scope="col">JMBG</th>
                      <th scope="col">Br telefona</th>
                      <th scope="col">Naziv predmeta</th>
                      <th scope="col">Odeljenje</th>
                    </tr>
                  </thead>';
        while($row=$result->fetch_assoc()) {
            ?>
            <tbody>
                <tr>

                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['JMBG']; ?></td>
                  <td><?php echo $row['br_tel']; ?></td>
                  <td><?php echo $row['naziv_predmeta']; ?></td>
                  <td><?php echo $row['odeljenje']; ?></td>
                </tr>
              </tbody>
            <!-- echo "<b>Ime ucenika: </b>" .$row['ime']. "<br> <b>Prezime ucenika:</b> " .$row['prezime']. "<br><b>Telefon Ucenika: </b> " .$row['telefon']. "<br><br>" ; -->
            <?php
          }
          echo "</table>";




        } else {
          echo "<h2 class='text-center'>Nije pronadjen nastavnik. U polje za pretragu kucajte opet ime nastavnika.</h2>";
        }

        }
        }
require 'delovi/footer.php';
 ?>
