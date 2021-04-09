<?php 
    function getDbConnection() {
        $dbhost = "localhost";
        $dbusername = ""; //zelf invullen!
        $dbpass = ""; //zelf invullen!
        $dbname = "db_gr8_buurtzorg"; 

        $conn       = "";          // connection string
        $pdo        = "";          // handler
        $charset = 'utf8mb4'; 
        
        $conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname); 
        
        $options = [ // define options for PDO connection
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // give error in case of issue
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // get row indexed by column name
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $vacature_type = $_POST['vacature_type'];
        $job_position = $_POST['job_position'];
        $function_tasks = $_POST['function_tasks'];
        $company_name = $_POST['company_name'];
        $company_info = $_POST['company_info'];
        $job_requirements = $_POST['job_requirements'];
        $job_experience = $_POST['job_experience'];
        $job_location = $_POST['job_location'];
        $job_workhours = $_POST['job_workhours'];
        $job_salary = $_POST['job_salary'];
        $job_benefits = $_POST['job_benefits']; 
        $status = $_POST['status'];

        $sql = "INSERT INTO `tb_vacature` ( `vacature_type`, `job_position`, `function_tasks`, `company_name`, `company_info`, `job_requirements`, `job_experience`,
         `job_location`, `job_workhours`, `job_salary`, `job_benefits`, `status`)
        VALUES ('$vacature_type', '$job_position', '$function_tasks', '$company_name', '$company_info', '$job_requirements', '$job_experience',
         '$job_location', '$job_workhours', '$job_salary', '$$job_benefits', '$status');"; 
        mysqli_query($conn, $sql); 
 
        header("Location: vacaturetemplate.php?opslaan=success");

    } //end function getDbConnection  
  
    $pdo =getDbConnection(); //stop return waarde in nieuwe variabele 