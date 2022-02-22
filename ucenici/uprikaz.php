<?php

//Pravljenje za ispis iz tabele pritiskom na dugme
if (isset($_POST['prikazi'])) {





            require 'inc/connect.php';

            $upit = "SELECT * FROM ucenici";

            $result = mysqli_query($conn, $upit);

            if (mysqli_num_rows($result)>0) {
              echo "<h3 class=' text-center'>Prikaz svih Ucenika</h3><br>";
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
              while ($row = mysqli_fetch_array($result)) {
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
            }else {
              echo "Ne postoje podaci u bazi";
            }
}
