<!DOCTYPE HTML> <html>
<head>
<title>Vacature Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/vacaturetemplate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head> 
    <div class="pagecon">
            <nav>
                <section class="navContainer">
                    <div class="logoWrapper"> <a href="index.php"><img src="images/logo_buurtzorg.png" alt="logo website"
                                style="width:15.1vh;height:11vh;"></a> </div>
                    <nav class="navMenu">
                        <ul class="navList">
                            <li class="navItem"><a class="navLink" href="index.php">Homepagina</a></li>
                        </ul>
                        <ul class="navList">
                            <li class="navItem"><a class="navLink" href="werkenbij.php">Werken bij</a></li>
                        </ul>
                        <ul class="navList">
                            <li class="navItem"><a class="navLink" href="contact.php">Contact Opnemen</a></li>
                        </ul>
                    </nav>
                </section> 
            </nav> 

        <div class="uploadblock">  
            <form action="vacatureupload.php" method="POST"> 
                        <h3>Vul hier de informatie in van het vacatureformulier.</h3> <br> <br>
                        <label for="vacature_type">Naam baan vacature:</label> 
                        <select id="vacature_type" name="tb_vacaturetypecatagory">
                            <option value="verzorgende_a">Verzorgende A</option> 
                            <option value="verzorgende_b">Verzorgende B</option> 
                            <option value="frontend_developer">Front-end Developer</option> 
                            <option value="backend_developer">Back-end Developer</option>
                        </select><br /> 

                        <label for="job_position">Positie van baan/functie:</label> 
                        <select id="job_position" name="tb_jobpositioncatagory">
                            <option value="medewerker">Medewerker</option> 
                            <option value="manager">Manager</option> 
                        </select><br /><br>

                        <input type="auto" name="function_tasks" placeholder="baan/functie taken"> <br>  
                        <input type="auto" name="company_name" placeholder="bedrijfsnaam"> <br>
                        <input type="auto" name="company_info" placeholder="bedrijfsbeschrijving"> <br>
                        <input type="text" name="job_requirements" placeholder="baan/functie vereisten (opleidingen)"> <br>
                        <input type="text" name="job_experience" placeholder="baan/functie ervaring (werkervaring)"> <br>

                        <label for="job_location">Locatie:</label> 
                        <select id="job_location" name="tb_joblocationcatagory">
                            <option value="maastricht_lenculenstraat">Lenculenstraat 12, 6211 KR Maastricht</option> 
                            <option value="maastricht_boschstraat">Boschstraat 4f, 6211 AS Maastricht</option> 
                            <option value="maastricht_Fregatweg">Fregatweg 2, 6222 NZ Maastricht</option> 
                            <option value="sittard_stationsplein">Stationsplein 22, 6131 AS Sittard</option> 
                            <option value="sittard_Rijksweg">Rijksweg Noord 24, 6131 CL Sittard</option>
                        </select><br /> 

                        <label for="job_workhours">Aantal werkuren per week:</label> 
                        <select id="job_workhours" name="tb_jobworkhourscatagory">
                            <option value="45">45 uren</option>
                            <option value="40">40 uren</option>
                            <option value="35">35 uren</option>
                            <option value="30">30 uren</option>
                            <option value="25">25 uren</option>
                            <option value="20">20 uren</option>
                            <option value="15">15 uren</option>
                        </select><br />  

                        <label for="job_salary">Salaris:</label> 
                        <select id="job_salary" name="tb_jobcatagory">
                            <option value="300">€300,- </option> 
                            <option value="320">€320,- </option> 
                            <option value="350">€350,- </option> 
                            <option value="380">€380,- </option> 
                            <option value="400">€400,- </option> 
                            <option value="420">€420,- </option> 
                            <option value="450">€450,- </option>  
                            <option value="480">€480,- </option>  
                            <option value="500">€500,- </option> 
                            <option value="520">€520,- </option>  
                            <option value="550">€550,- </option>  
                            <option value="580">€580,- </option>   
                            <option value="600">€600,- </option>   
                        </select><br /> 

                        <label for="status">Status Vacature:</label> 
                        <select id="status" name="tb_statuscatagory">
                            <option value="open">Is open</option> 
                            <option value="closed">Is gesloten</option> 
                        </select><br />

                        <br><br>
                        <button type="submit" name="submit"> Opslaan </button>  
                    </form>   
                </div>

    <footer>
        <div class="footer">
            <div id="footercopyright">2021 &copy; VistaCare Buurtzorg</div>
            <a href="#" id="loginknop"> Inloggen </a> 
            <div id="footertext2">Telefoonnummer: 06 87654321</div>
        </div>
    </footer> 
</body> 
</html>    