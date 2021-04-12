<?php
    if (!session_id()) session_start();
    if(!isset($_SESSION['username'])) {
        $portalbtn = "Inloggen";
    } else {
        $portalbtn = "Portal";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon/logo_buurtzorg.favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
    <title>Buurtzorg - Home</title>
</head>

<body>
    <div class="pagecon">
        <nav>
            <section class="navContainer">

                <div class="logoWrapper"> <a href="index.php"><img src="images/logo_buurtzorg.png" alt="logo website"
                            style="width:15.1vh;height:11vh;"></a> </div>
                <nav class="navMenu">
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="index.php"><i class="fas fa-home"></i>&nbsp;Homepagina</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="werkenbij.php"><i class="fas fa-briefcase"></i>&nbsp;Werken bij</a></li>
                    </ul>
                    <ul class="navList">
                        <li class="navItem"><a class="navLink" href="contact.php"><i class="fas fa-phone-alt"></i>&nbsp;Contact Opnemen</a></li>
                    </ul>
                </nav>
            </section> 
        </nav>

        <div class="mainbody">
            <div class="bannerimage"><img src="images/bannerimage.png" alt="banner homepage"
                    style="width:165vh;height:55vh;padding-left:45vh;"></div>

            <section id="textbox1">
                <section class="textbox1_text">
                <h3>Welkom bij stichting Buurtzorg.</h3><br>
                Wij staan ervoor onze medemensen te ondersteunen bij het dagelijks leven.<br>
                Ouderen, mensen met handicappen, iedereen die wij kunnen helpen, zullen wij voor zorgen om hun wat rust te bieden. <br>
                Onze medewerkers staan altijd klaar om anderen te steunen waar nodig.<br>
                </section>
            </section>
            <!---
            
            <section id="textbox2">
                <section class="textbox2_text">Lorem ipsum.</section>
            </section>    --->
        </div>

        <footer>
        <div class="footer">
            <div id="footercopyright">2021 &copy; VistaCare </div>
              <a href="./loginbz/index.php" id="loginknop"><i class="fas fa-user-circle"></i>&nbsp;<?php echo $portalbtn?></a>
              <?php if (isset($_SESSION['username'])) {
                            echo "<a href='./loginbz/includes/logout.inc.php' id='loginknop'>Uitloggen</a>";
                }?>
            <div id="footertext2"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefoonnummer: 06 87654321</div>
        </div>
    </footer>  

</body> 