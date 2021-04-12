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
  <title>Contactpagina </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="favicon/logo_buurtzorg.favicon.png"/>
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/contact.css" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
  <title>Buurtzorg - Contact</title>
</head>

<body>

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

  <div class="contactbody">

    <div class="inhoudcontact">

      <div id="AlgemeneInfo">
        <h2>Algemene Info</h2>
        <div id="tekst">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
          molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
          numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
          optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
          obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
          nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
          tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
          quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
          sapiente officiis modi at sunt excepturi expedita sint?
        </div>
      </div>

      <div id="CoronaInfo">
        <h2>Corona Info</h2>
        <div id="tekst">
          In verband met Corona kunt u ons hoofdkantoor alleen op telefonische afspraak bezoeken. </br>
          Bij uw bezoek dient u uiteraard een mondkapje te dragen. </br>
          Wij voorzien u bij de ingang van handgel en tissues. </br>
        </div>
      </div>

      <div id="AdresInfo">
        <h2>Adres Info</h2>
        <div id="HoofdkantoorTekst">
          <b>Hoofdkantoor:</b> </br>
          <b>Maastricht:</b> Lenculenstraat 12, 6211 KR
        </div>
        <div id="LocatieTekst">
          <b>Maastricht:</b> Boschstraat 4f, 6211 AS </br>
          Fregatweg 2, 6222 NZ </br>
          <b>Sittard:</b> Stationsplein 22, 6131 AS </br>
          Rijksweg Noord 24, 6131 CL </br>
        </div>
      </div>
    </div>
  </div>

  <footer>
        <div class="footer">
            <div id="footercopyright">2021 &copy; VistaCare </div>
              <a href="./loginbz/index.php" id="loginknop"><i class="fas fa-user-circle"></i>&nbsp;<?php echo $portalbtn?></a>
              <?php if (isset($_SESSION['username'])) {
                            echo "<a href='./loginbz/includes/logout.inc.php' id='loginknop'>Uitloggen</a>";
                }?>
            <div id="footertext2">Telefoonnummer: 06 87654321</div>
        </div>
    </footer> 

</body>
</html>