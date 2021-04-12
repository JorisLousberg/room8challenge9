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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Buurtzorg - LogIn</title>
</head>

<body>
    <?php
        require_once("./includes/login.inc.php");
    ?>

    <div class="pagecon">
        <nav>
            <section class="navContainer">

                <div class="logoWrapper"><a href="../index.php"><img src="../images/logo_buurtzorg.png" alt="logo website"
                            style="width:15.1vh;height:11vh;"></a></div>
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

<section class="logincon">
    <form method="post" autocomplete="off">
        <div class="login-box">

            <?php
                if(isset($_SESSION['errortype'])) {
                    switch($_SESSION['errortype']) {
                        case "1":
                            $errormsg = "U bent niet ingelogd";
                            unset($_SESSION['errortype']);
                        break;
                        case "2":
                            $errormsg = "Onvoldoende Rechten";
                            unset($_SESSION['errortype']);
                        break;
                        default:
                            $errormsg = "Unknown Error";
                            unset($_SESSION['errortype']);
                    } // end switch
                
                    if(isset($errormsg)) {
                        echo '<span id="error-msg"><b>Error: </b>'.$errormsg.'</span><br>';
                    } // end if
                } //end if
                
            ?>

        <div id= "login">
            <div class= "imageb"><img src= "../images/logo_buurtzorg.png" width= 400px></div>
            <div class= "username"><input class="textbox" autocomplete="new-password" type="text" placeholder="Gebruikersnaam" name="username" value="" /></div><br />
            <div class= "passwd"><input class="textbox" type="password" autocomplete="new-password" placeholder="Wachtwoord" name="password" value="" /></div><br />
            <div class= "send"><section class="buttoncon"><input class="button" type="submit" name="login" value="Inloggen" /></div></section>
        </div>

            <?php
              if(isset($message)) {
                echo '<span id="error-msg"><b>Error: </b>' . $message . '</span><br>';
              } // end if
            ?>
        </div>
    </form>
</section>

    <footer>
            <div class="footer">
                <div id="footercopyright">2021 &copy; VistaCare </div>
                <a href="./index.php" id="loginknop"><?php echo $portalbtn?></a>
                <?php if (isset($_SESSION['username'])) {
                            echo "<a href='./loginbz/includes/logout.inc.php' id='loginknop'>Uitloggen</a>";
                 }?>
                <div id="footertext2">Telefoonnummer: 06 87654321</div>
            </div>
    </footer>   

</body>
</html>

