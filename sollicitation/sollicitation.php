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
            <section id="form_con"><div class="form">
  <form action="" enctype="multipart/form-data" method="post">
  <mark class='title1'><strong>client gegevens</strong></mark> <br/>
  <input type="text" name="tb_clientid" value="" placeholder="Vul voornaam in"> <!--client id input -->
  <input type="text" name="tb_license" value="" placeholder="Vul achternaam in"><br /> <!--license input -->
  geboorte datum:<input type="date" name="tb_date" value="" ><br /> <!--license input -->
  <input type="text" name="tb_city" value="" placeholder="Vul stad in"><br /> <!--city input -->
  <input type="text" name="tb_street" value="" placeholder="Vul straat in"><br /> <!--street input -->
  <input type="text" name="tb_housenumber" value="" placeholder="Vul huisnummer in"><br /> <!--housenumber input -->
  <input type="text" name="tb_postnr" value="" placeholder="Vul postcode in"><br /> <!--postcode input -->
  <input type="email" name="tb_email" value="" placeholder="Vul E-mail in"><br /> <!--email input -->
  <input type="text" name="tb_telnum" value="" placeholder="Vul telefoon nummer in"><br /> <!--phonenumber input -->
  
    
  <input type="hidden" name="frmInsertMenuitem" value="frmInsertMenuitem"> <br /> <!--form data values -->
  <input type="submit" name="button_submit" value="versturen"> <!--data tranfer button -->
  </form>
</div></section>
        </div>

        <footer>
            <div class="footer">
                <div id="footercopyright">2021 &copy; VistaCare </div>
                <div id="footertext2">Telefoonnummer: 06 87654321</div>
            </div>
        </footer>

</body> 