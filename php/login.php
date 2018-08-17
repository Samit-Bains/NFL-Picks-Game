<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        $sql = "SELECT user_id FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        // If result matched $username and $password, table row must be 1 row

        if($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: ../welcome.php");
         }else {
            header("location: error.php");
         }
    }
?>