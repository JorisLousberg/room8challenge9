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
           <section class="thankcon">
               bedankt <?php echo $sol_name; ?> voor het solliciteren bij ons!
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
