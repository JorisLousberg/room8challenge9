<?php 
    session_start();
    if(!isset($_SESSION['username'])) { // not logged in 
        header("location:loginbz/index.php");
    } else if($_SESSION['typeid'] !== 1 || $_SESSION['typeid'] !== 2) { // insufficient rights
        header("location:loginbz/portal.php");
    }
?>

<!DOCTYPE HTML> <html>
<head>
    <title>Vacature Upload Template (eng)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon/logo_buurtzorg.favicon.png"/>
    <link rel="stylesheet" type="text/css" href="css/vacaturetemplate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/77cadcfd34.js" crossorigin="anonymous"></script>
    <title>Buurtzorg - Vacature Upload Template (eng)</title>
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
            <form action="vacatureupload_en.php" method="POST"> 
                        <h3>Fill in the information for the vacancy here. [english variant!]</h3> <br><br>
 
                        <label for="vacature_type">Naam baan van Vacature:</label> 
                            <select name="vacature_type">
                                <option value="Verzorgende A">Caretaker A</option> 
                                <option value="Verzorgende B">Caretaker B</option> 
                                <option value="Front-end Developer">Front-end Developer</option> 
                                <option value="Back-end Developer">Back-end Developer</option>
                            </select> <br>
                    
                        Job/function tasks:<input type="text" name="function_tasks" placeholder="baan/functie taken"> <br>
                        <br>
                        Name + last name contactperson:<input type="text" name="contact_info_name" placeholder="name + last name contactperson. example: Paul Bossen"> <br>
                        Phonenumber contactperson:<input type="text" name="contact_info_phone" placeholder="phonenumber contactperson. example: 06 12345678"> <br>
                        Education requirements:<input type="text" name="job_requirements" placeholder="job/function requirements (educations)"> <br>
                        Work experience: <input type="text" name="job_experience" placeholder="baan/functie ervaring (werkervaring)"> <br>
                        <br><br>  

                        <label for="job_location">Working location:</label> 
                        <select name="job_location">
                                <option value="Lenculenstraat 12, 6211 KR Maastricht">Lenculenstraat 12, 6211 KR Maastricht</option> 
                                <option value="Boschstraat 4f, 6211 AS Maastricht">Boschstraat 4f, 6211 AS Maastricht</option> 
                                <option value="Regatweg 2, 6222 NZ Maastricht">Regatweg 2, 6222 NZ Maastricht</option> 
                                <option value="Stationsplein 22, 6131 AS Sittard">Stationsplein 22, 6131 AS Sittard</option>
                                <option value="Rijksweg Noord 24, 6131 CL Sittard">Rijksweg Noord 24, 6131 CL Sittard</option>
                            </select> <br><br>

                        Working hours (per week): <input type="text" name="job_workhours" placeholder="__ hours"> <br>
                        Working salary in € euro's: <input type="text" name="job_salary" placeholder="€___,-"> <br>
                        Closing date vancancy: <input type="text" name="job_closedate" placeholder="closing date vacancy: example: june 12 2021"> <br><br>
                        <label for="job_status">Status of vancancy:</label> 
                        <select name="job_status">  
                                <option value="Is open">Is open</option> 
                                <option value="Is closed">Is closed</option> 
                            </select> <br>
                        <button type="submit" name="submit"> Save </button>  
                    </form>   
                </div>

    <footer> 
        <div class="footer">
            <div id="footercopyright">2021 &copy; VistaCare </div>
            <a href="#" id="loginknop">Log in </a> 
            <div id="footertext2">phonenumber: 06 87654321</div>
        </div>
    </footer> 
</body> 
</html>  