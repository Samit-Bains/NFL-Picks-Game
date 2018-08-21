<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '$username' ";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        // If result matched $username and $password, table row must be 1 row

        if(password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $username;
            header("location: ../welcome.php");
            $_SESSION['login_error'] = False;
         }else {
            $_SESSION['login_error'] = True;
            header("location: ../loginPage.php");
         }
    }
?>