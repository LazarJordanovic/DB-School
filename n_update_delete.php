
<?php

//Pravljenje za ispis iz tabele pritiskom na dugme
if (isset($_POST['prikazi'])) {





            require 'inc/connect.php';
            // require 'nastavnici_update_delete/obrisi_.php';

            $upit = "SELECT * FROM nastavnici";

            $result = mysqli_query($conn, $upit);

            if (mysqli_num_rows($result)>0) {
              echo "<h3 class=' text-center'>Prikaz svih Nastavnika</h3><br>";
              echo '<table class="table">
                      <thead>
                        <tr>

                          <th scope="col">Ime</th>
                          <th scope="col">Prezime</th>
                          <th scope="col">JMBG</th>
                          <th scope="col">Br. Telefona</th>
                          <th scope="col">Naziv Predmeta</th>
                          <th scope="col">Odeljenje</th>
                          <th scope="col">Obrisi/Ispravi</th>
                        </tr>
                      </thead>';
              while ($row = mysqli_fetch_array($result)) {
                ?>
                <tbody>
                    <tr>

                      <td><?php echo $row['fname']; ?></td>
                      <td><?php echo $row['lname']; ?></td>
                      <td><?php echo $row['JMBG']; ?></td>
                      <td><?php echo $row['br_tel']; ?></td>
                      <td><?php echo $row['naziv_predmeta']; ?></td>
                      <td><?php echo $row['odeljenje']; ?></td>
                      <td><a href="obrisi_nastavnike.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Obrisi</a>
                        <a href="ispravi_nastavnika.php?id= <?php echo $row['id']; ?>" class="btn btn-success">Ispravi</a></td>

                    </tr>
                  </tbody>
                <!-- echo "<b>Ime ucenika: </b>" .$row['ime']. "<br> <b>Prezime ucenika:</b> " .$row['prezime']. "<br><b>Telefon Ucenika: </b> " .$row['telefon']. "<br><br>" ; -->
                <?php
              }
              echo "</table>";
            }else {
              echo "Ne postoje podaci u bazi";
            }
}
