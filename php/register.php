<?php

    include("config.php");
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['password'] == $_POST['confirmPassword']){
            $userName = $db->real_escape_string($_POST['userName']);
            $email = $db->real_escape_string($_POST['email']);
            $password = $db->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

            $sql = "INSERT INTO users (username, email, password) "
            . "VALUES ('$userName', '$email', '$password')";

            //If the query is successful, user is redirected to login page
            if($db->query($sql) === true){
                header("Location: ../loginPage.php");
            }
        }
    }

?>