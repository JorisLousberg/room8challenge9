<?php
print_r($_FILES);
include_once('uploadCV.inc.php');
print_r($_FILES);
include_once('uploadletter.inc.php');

  $sql = "INSERT INTO tb_sollicitation_responses_test (for_name, last_name, birthdate, city, street, house_number, postcode, e_mail, phone_number, CV, Motivation_letter) 
  VALUES ('$forname','$lastname','$birthdate','$city','$street','$housenm','$postnr','$mail','$telnum','$name1','$name2')";
  $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
          //print_r($result);


$sol_name = $forname + $lastname;
