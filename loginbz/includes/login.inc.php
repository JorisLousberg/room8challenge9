<?php
    if (!session_id()) session_start();
    require_once ("../connection.php");

        if(isset($_SESSION['username'])) {
            header('location:./redirect.php');
        } else if(isset($_POST['login'])) {
            if(empty($_POST['username']) || empty($_POST["password"])) {
                $message = 'Vul uw gegevens in';
            } else {

                $username = $_POST['username']; 
                $password = $_POST['password']; // credentials filled in by user
                $passwordHash = md5($password);

                $query = "SELECT * FROM tb_users WHERE name ='" . $username . "' AND password ='" . $passwordHash . "'";
                $statement = $pdo->prepare($query);

                $statement->execute();
                $row = $statement->fetchAll();

                $count= $statement->rowCount();
                if($count > 0) {
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['typeid'] = $row['role_id'];
                    header("location:./portal.php"); 
                } else {
                    $message = '<label class="error-msg">Onjuiste gebruikersnaam en/of wachtwoord!</label>';
                }
            }
        }

    unset($dbpass);
    unset($dbusername);
    unset($dbname);
    unset($dbhost);
?>