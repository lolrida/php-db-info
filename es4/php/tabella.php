        <?php
            include '../../php/connection.php';

            $codfilm = $titolo = $annoProduzione = $nazionalita = $regista = $genere = null;

            if(isset($_POST['codfilm']))
            {
                $codfilm = $_POST['codfilm'];
            }
            if(isset($_POST['titolo']))
            {
                $titolo = $_POST['titolo'];
            }
            if(isset($_POST['annoProduzione']))
            {
                $annoProduzione = $_POST['annoProduzione'];
            }
            if(isset($_POST['nazionalita']))
            {
                $nazionalita = $_POST['nazionalita'];
            }
            if(isset($_POST['regista']))
            {
                $regista = $_POST['regista'];
            }
            if(isset($_POST['genere']))
            {
                $genere = $_POST['genere'];
            }

            if ($codfilm || $titolo || $annoProduzione || $nazionalita || $regista || $genere) {
                $query = "SELECT * FROM film WHERE 1=1";
                
                if ($codfilm) {
                    $query .= " AND codfilm = '$codfilm'";
                }
                if ($titolo) {
                    $query .= " AND titolo = '$titolo'";
                }
                if ($annoProduzione) {
                    $query .= " AND annoProduzione = '$annoProduzione'";
                }
                if ($nazionalita) {
                    $query .= " AND nazionalita = '$nazionalita'";
                }
                if ($regista) {
                    $query .= " AND regista = '$regista'";
                }
                if ($genere) {
                    $query .= " AND genere = '$genere'";
                }
                
                $result = mysqli_query($conn, $query);
                
                if ($result) {
                    echo "<table>";
                    echo "<tr><th>Codfilm</th><th>Titolo</th><th>Anno Produzione</th><th>Nazionalita</th><th>Regista</th><th>Genere</th></tr>";
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['codfilm']."</td>";
                        echo "<td>".$row['titolo']."</td>";
                        echo "<td>".$row['annoProduzione']."</td>";
                        echo "<td>".$row['nazionalita']."</td>";
                        echo "<td>".$row['regista']."</td>";
                        echo "<td>".$row['genere']."</td>";
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                } else {
                    echo "Error executing query: " . mysqli_error($conn);
                }
            }
        
        