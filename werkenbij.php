<?php
    if (!session_id()) session_start();
    if(!isset($_SESSION['username'])) {
        $portalbtn = "Inloggen";
    } else {
        $portalbtn = "Portal";
    }
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title> Werken bij </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon/logo_buurtzorg.favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
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

            <div class="werkimage"><img src="images/personeelwerk.jpg" alt="werkpage foto"
                    style="width:73.5vh;height:29vh;padding-left:2.1vh;"></div>
        
            <section id="textbox_werk">
                    <section class="werkenbij_text">
                    <h2> Werken Bij Buurtzorg</h2> <br>
                    Buurtzorg is altijd op zoek naar personeel dat klaar staat<br>
                    om mensen te kunnen helpen en ondersteunen.<br>
                    Als u geinteresseerd bent bij ons te komen werken, <br>
                    bekijk onze vacatures dan maar eens.<br><br>
                    Als u wilt solliciteren zult u een bevestiging ontvangen na het invullen<br>
                     van een van de sollicitatieformulieren. <br>
                    Het kan voorkomen dat iemand anders u voor is met soliciteren,<br>
                     of dat een vacature gesloten wordt. <br>
                    Als dit het geval is, kunt u gerust een van onze andere vacatures bekijken.
                    </section>
                </section>

        </div>

        <div id= "soll">

            <div class= "vaca"> Vacatures </div><br />

    <?php
    
        require_once ('./connection.php');

        $sql = "SELECT id, vacature_type, job_location, job_closedate FROM tb_vacature";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        $job= "<div class='vacature'>";
        $button= "<div id='eng'><a href='workat.php'><img src='./images/ENG.png' width= '50px'></a></div>";

        foreach($result as $key => $row){

            $job .="<div class= 'box'><div class='jobtitle'>" . $row['vacature_type'] . "</div><br /><div class='location'>" . "locatie: " . $row['job_location'] . "</div><div class='date'>" . "Sluitings datum: " . $row['job_closedate'] . "<a href='./application/application.php?id=" . $row['id'] . "'></div><div class='type'>" . "<button class='knop' type='button'> INFO </button></div></a></div><br />";

        }

        $job .= "</div>";

        echo $job;
        echo $button;

    ?>

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