<?php
print_r($_FILES);
include_once('uploadCV.inc_en.php');
print_r($_FILES);
include_once('uploadletter.inc_en.php');

  $sql = "INSERT INTO tb_application_responses_en (for_name, last_name, birthdate, city, street, house_number, postcode, e_mail, phone_number, CV, Motivation_letter, vac_id) 
  VALUES ('$forname','$lastname','$birthdate','$city','$street','$housenm','$postnr','$mail','$telnum','$name1','$name2','$vac_id')";
  $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
          //print_r($result); 




