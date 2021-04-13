<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/application.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
    <title>Buurtzorg - Home</title>
</head>
 
<body>
    <div class="pagecon">
        <nav>
            <section class="navContainer">

                <div class="logoWrapper"> <a href="../index.php"><img src="../images/logo_buurtzorg.png" alt="logo website"
                            style="width:15.1vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../index.php"><i class="fas fa-home"></i>&nbsp;Homepagina</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../werkenbij.php"><i class="fas fa-briefcase"></i>&nbsp;Werken bij</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../contact.php"><i class="fas fa-phone-alt"></i>&nbsp;Contact Opnemen</a></li>
                    </ul>
                </nav>
            </section> 
        </nav>


        <div class="mainbody">
            <?php
            require_once ('../connection.php');
            $sql = "SELECT * FROM tb_vacature WHERE id =" . $_GET['id'];

$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();
$vacatureinfo = "<section id='vac_con'>";

foreach($results as $key => $row) {
  $vacatureinfo .= "<div><h1>" . $row['vacature_type'] . "</h1></div> " . 
                   "<div>" . $row['function_tasks'] . "</div><br />" .
                   "<div> <h3>eisen:</h3>" . $row['job_requirements'] . "</div><br />" .
                   "<div> <h3>gewenste ervaring:</h3>" . $row['job_experience'] . "</div><br />" .
                   "<div> <h3>locatie:</h3>" . $row['job_location'] . "</div><br />" .
                   "<div> <h3>uren en salaris:</h3>" . $row['job_workhours'] . "&nbsp; &nbsp; &nbsp;"
                           . $row['job_salary'] . "per week</div><br />" .
                   "<div> <h3>contact gegevens:</h3>" . $row['contact_info_name'] . "</div>" .
                   "<div>" . $row['contact_info_phone'] . "</div>" .
                   "<div> close date: " . $row['job_closedate'] . "</div>" .
                   "<div>the vacency " . $row['job_status'] . "</div>"
                   ;
}
$vac_id = $row['id'];
$vacatureinfo .= "</div>";

echo $vacatureinfo; ?>
            </section>
            <section id="form_con">
                <?php
                //gegevens in de database opslaan
                //1. we maken een formulier voor de input van de gegevens
                //2. we maken connectie met de database
                //3. we slaan de ingevoerde gegevens op in de database 
                if(isset($_POST['frmInsertApplyResp'])){
                    //opslaan van gegevens
                    //print_r($_POST);
                    include_once('../connection.php'); //connectie met DB maken
                    include_once("collect.ap.inc.php");    //Gegevens uit formulier halen
                    include_once("insert.ap.inc.php");    //opslaan van gegevens in de DB 
                    ?>

                        <!--na het opslaan komt een js functie-->
                        <script>setTimeout(function () {
                        window.open('detourpage.php', '_top');
                        }, 10); </script><?php //na een seconde wordt de user naar het menu gestuurd
                } else {
                    //als er geen post dan toont hij het formulier
                    include_once('form.ap.inc.php');
                } 
            ?>
            </section>
        </div>

        <footer>
            <div class="footer">
                <div id="footercopyright">2021 &copy; VistaCare </div>
                <div id="footertext2"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefoonnummer: 06 87654321</div>
            </div>
        </footer>

</body> 



<?php 
