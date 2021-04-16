<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sollicitation.css">
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
           <section class="thankcon">
               thank you <?php include_once('../connection.php');
               $sql = "SELECT for_name FROM tb_application_responses_en WHERE id=(SELECT max(id) FROM tb_application_responses_en)";
               $stmt = $pdo->prepare($sql);
               $stmt->execute();
               $result = $stmt->fetchAll(); 
               $name = "";
               
               foreach($result as $key => $row) {
    
                // $autotitle = "<div class='hoofdtitel'>"; // generate string with HTML, using the retrieved database values
                // $autosignature = "<div class='kenmerk'>";
                
                $name .= $row['for_name'];   }
               
               echo $name;
               ?>, for appliying on our website!
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
