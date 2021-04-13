<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sollicitation.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
                        <li class="navItem"><a class="navLink" href="../index.php">Homepagina</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../werkenbij.php">Werken bij</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="../contact.php">Contact Opnemen</a></li>
                    </ul>
                </nav>
            </section> 
        </nav>


        <div class="mainbody">
            <section id="vac_con"></section>
            <section id="form_con">
                <?php
                //gegevens in de database opslaan
                //1. we maken een formulier voor de input van de gegevens
                //2. we maken connectie met de database
                //3. we slaan de ingevoerde gegevens op in de database 
                if(isset($_POST['frmInsertSolResp'])){
                    //opslaan van gegevens
                    print_r($_POST);
                    include_once('../connection.php'); //connectie met DB maken
                    include_once("collect.sol.inc.php");    //Gegevens uit formulier halen
                    include_once("insert.sol.inc.php");    //opslaan van gegevens in de DB 
                    $sol_name = $forname + $lastname;?> 

                        <!--na het opslaan komt een js functie-->
                        <script>setTimeout(function () {
                        window.open('detourpage.php', '_top');
                        }, 10); </script><?php //na een seconde wordt de user naar het menu gestuurd
                } else {
                    //als er geen post dan toont hij het formulier
                    include_once('form.sol.inc.php');
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
