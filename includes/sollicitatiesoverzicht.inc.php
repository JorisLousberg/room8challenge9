<?php

    require_once ('./connection.php');

        $sql = "SELECT * FROM tb_sollicaties WHERE id =" . $_GET['functietitel'];

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        //print_r($result);
  
        $sql = "SELECT functietitel FROM tb_sollicitaties WHERE functietitel =" . $_GET['functietitel'] . " LIMIT 4";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $resultimage = $stmt->fetchAll();

    foreach($result as $key => $row) {
    
            
            $functietitel = $row['functietitel'];
            $locatie = $row['locatie'];
            $salaris = "&euro; " .  $row['salaris'];
            $voornaam = $row['voornaam'];
            $achternaam = $row['achternaam'];
            $geboortedatum = $row['geboortedatum'];
            $woonplaats = $row['woonplaats'];
            $email = $row['email'];
            $telnummer = $row['telnummer'];
            $cv = $row['cv'];
            $motivatie = $row['motivatie'];
            $fullname = $functietitel . " " . $voornaam . " " . $achternaam;

}

?>
</body>

</html>