<!DOCTYPE HTML> <html>
<head>
    <title>Vacature Upload Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon/logo_buurtzorg.favicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/vacaturetemplate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
    <title>Buurtzorg - Vacature Upload Template</title>
</head> 
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

        <div class="uploadblock">  
            <form action="vacatureupload.php" method="POST"> 
                        <h3>Vul hier de informatie in van het vacatureformulier.</h3> <br><br>
 
                        <label for="vacature_type">Naam baan van Vacature:</label> 
                            <select name="vacature_type">
                                <option value="Verzorgende A">Verzorgende A</option> 
                                <option value="Verzorgende B">Verzorgende B</option> 
                                <option value="Front-end Developer">Front-end Developer</option> 
                                <option value="Back-end Developer">Back-end Developer</option>
                            </select> <br>
                    
                        Baan/functie taken:<input type="text" name="function_tasks" placeholder="baan/functie taken"> <br>
                        <br>
                        Naam + achternaam contactpersoon:<input type="text" name="contact_info_name" placeholder="voor + achternaam contactpersoon bijv. : Paul Bossen"> <br>
                        Telefoonnummer contactpersoon:<input type="text" name="contact_info_phone" placeholder="telefoonnummer van contactpersoon bijv. : 06 12345678"> <br>
                        Opleidingseisen:<input type="text" name="job_requirements" placeholder="baan/functie vereisten (opleidingen)"> <br>
                        Werk ervaring: <input type="text" name="job_experience" placeholder="baan/functie ervaring (werkervaring)"> <br>
                        <br><br>  

                        <label for="job_location">Werklocatie:</label> 
                        <select name="job_location">
                                <option value="Lenculenstraat 12, 6211 KR Maastricht">Lenculenstraat 12, 6211 KR Maastricht</option> 
                                <option value="Boschstraat 4f, 6211 AS Maastricht">Boschstraat 4f, 6211 AS Maastricht</option> 
                                <option value="Regatweg 2, 6222 NZ Maastricht">Regatweg 2, 6222 NZ Maastricht</option> 
                                <option value="Stationsplein 22, 6131 AS Sittard">Stationsplein 22, 6131 AS Sittard</option>
                                <option value="Rijksweg Noord 24, 6131 CL Sittard">Rijksweg Noord 24, 6131 CL Sittard</option>
                            </select> <br><br>

                        Werkuren (aantal per week): <input type="text" name="job_workhours" placeholder="__ uren"> <br>
                        Werk salaris in € euro's: <input type="text" name="job_salary" placeholder="€___,-"> <br>
                        Sluitingsdatum Vacature: <input type="text" name="job_closedate" placeholder="sluitingsdatum vacature: bijv. : 12 juni 2021"> <br><br>
                        <label for="job_status">Status van Vacature:</label> 
                        <select name="job_status">
                                <option value="Is open">Is open</option> 
                                <option value="Is gesloten">Is gesloten</option> 
                            </select> <br>
                        <button type="submit" name="submit"> Opslaan </button>  
                    </form>   
                </div>

    <footer> 
        <div class="footer">
            <div id="footercopyright">2021 &copy; VistaCare </div>
            <a href="#" id="loginknop"> Inloggen </a> 
            <div id="footertext2">Telefoonnummer: 06 87654321</div>
        </div>
    </footer> 
</body> 
</html>    