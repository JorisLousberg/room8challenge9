<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sollicitatiesoverzicht.css">
  <title>Buurtzorg - Sollicitatie Overzicht</title>
</head>

<body>
  <div class="pagecon">
    <nav>
      <section class="navContainer">

        <div class="logoWrapper"> <a href="index.php"><img src="images/logo_buurtzorg.png" alt="logo website"
              style="width:15.1vh;height:11vh;"></a> </div>
        <nav class="navMenu">
          <ul class="navList">
            <li class="navItem"><a class="navLink" href="index.php">Homepagina</a></li>
          </ul>
          <ul class="navList">
            <li class="navItem"><a class="navLink" href="#">Werken bij</a></li>
          </ul>
          <ul class="navList">
            <li class="navItem"><a class="navLink" href="contact.php">Contact Opnemen</a></li>
          </ul>
        </nav>
      </section>
    </nav>

    <?php
        require_once('connection.php');
        require_once('includes/sollicitatiesoverzicht.inc.php');
    
            $sql = "SELECT * FROM tb_sollicitaties";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            print_r($result);

        $sollicitaties = "<div id='table'>";

        foreach($result as $key => $row) {

            $sql = "SELECT functietitel FROM tb_sollicitatie WHERE functietitel =" . $row['id'] . " LIMIT 1";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resultimage = $stmt->fetchAll();

            foreach($resultimage as $keyimage => $rowimage) {
                $functietitel = "<div class='functietitel'><span>" . $row['functietitel'] . " " . $row['locatie'] . "</span>" . "</div>" . $functietitel;
                $naam = "<div class='naam'>" . $row['voornaam'] . "</div>";

                $sollicitaties .= "<div class='vacatureblok'>";

            }

        }

            $sollicitaties .= "</div>";
    
            echo $sollicitaties;

    ?>

    <div class="tekst">
      <h2>Sollicitaties</h2>
      <table>
        <tr>
          <th>Functietitel</th>
        </tr>
        <tr>
          <td><?php echo $functietitel?></td>
        </tr>
      </table>
    </div>

    <footer>
      <div class="footer">
        <div id="footercopyright">2021 &copy; VistaCare </div>
        <div id="footertext2">Telefoonnummer: 06 87654321</div>
      </div>
    </footer>
  </div>
</body>

</html>