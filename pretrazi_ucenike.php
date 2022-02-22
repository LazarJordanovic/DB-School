<?php
require 'delovi/header.php';
require 'delovi/ucenici_meni.php';?><br><br>
<?php
require 'inc/connect.php';
if (isset($_POST['submit'])) {


$search_value=$_POST["search"];

if($conn->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $upit="SELECT * FROM ucenici WHERE ufname LIKE '%$search_value%'";

        $result = mysqli_query($conn, $upit);

        if (mysqli_num_rows($result)>0) {
          echo "<h3 class=' text-center'>Prikaz trazenog ucenika</h3><br>";
          echo '<table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">Ime</th>
                      <th scope="col">Prezime</th>
                      <th scope="col">JMBG</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Odeljenje</th>
                      <th scope="col">Br telefona</th>
                    </tr>
                  </thead>';
        while($row=$result->fetch_assoc()) {
            ?>
            <tbody>
                <tr>

                  <td><?php echo $row['ufname']; ?></td>
                  <td><?php echo $row['ulname']; ?></td>
                  <td><?php echo $row['uJMBG']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['uodeljenje']; ?></td>
                  <td><?php echo $row['ubr_tel']; ?></td>
                </tr>
              </tbody>
            <!-- echo "<b>Ime ucenika: </b>" .$row['ime']. "<br> <b>Prezime ucenika:</b> " .$row['prezime']. "<br><b>Telefon Ucenika: </b> " .$row['telefon']. "<br><br>" ; -->
            <?php
          }
          echo "</table>";




            } else {
              echo "<h2 class='text-center'>Nije pronadjen ucenik. U polje za pretragu kucajte opet ime ucenika.</h2>";
            }

        }
        }
require 'delovi/footer.php';
 ?>
