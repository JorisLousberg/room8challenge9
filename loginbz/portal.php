<?php 
    if (!session_id()) session_start();
    if(!isset($_SESSION['username'])) {
        $portalbtn = "Inloggen";
        $_SESSION['errortype'] = "1";
        header("location:../index.php");
    } else {
        $portalbtn = "Portal";
    }
?>
<!DOCTYPE html>
    <html lang="nl">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/login.css">
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <title>Buurtzorg - Portaal</title>
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

<div id="titl">

    <div class= "portal">Portal</div>

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
                    }
                    
                    if(isset($errormsg)) {
                        echo '<span id="error-msg"><b>Error: </b>'.$errormsg.'</span><br>';
                    }
                }
                ?>
</div>

<section id="links">
    <?php 

        $vacatureplaatsen =
        "<a href='../vacaturetemplate.php' class='link'>
            <div class='cont'>
                <div class='tx'>
                    <span>Nieuwe vacature(s) plaatsen</span>
                </div>
            </div><br />
        </a>";

        $vacatureoverzicht =
        "<a href='../overzicht.php' class='link'>
            <div class='cont'>
                <div class='tx'>
                    <span>Overzicht van vacatures</span>
                </div>
            </div><br />
        </a>";

        $admin = 
        "<a href='../adminpage.php' class='link'>
            <div class='cont'>
                <div class='tx'>
                    <span>Admin</span>
                </div>
            </div>
        </a>";

        switch ($_SESSION['typeid']) {

            case 0:
                echo $vacatureplaatsen . $vacatureoverzicht; //$adminrecht hoort hierbij
            break;

            case 1:
                echo $vacatureplaatsen . $vacatureoverzicht;
            break;

            default:
            session_destroy();
            echo "<span><b>Error:</b> Try logging in again.</span>";
        }
    ?>
</section>   
</div>

    <footer>
            <div class="footer">
                <div id="footercopyright">2021 &copy; VistaCare </div>
                <a href="./index.php" id="loginknop"><?php echo $portalbtn?></a>
                <?php if (isset($_SESSION['username'])) {
                            echo "<a href='../loginbz/includes/logout.inc.php' id='loginknop'>Uitloggen</a>";
                 }?>
                <div id="footertext2">Telefoonnummer: 06 87654321</div>
            </div>
    </footer>

</body>
</html>
