<?php
    include("config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

<<<<<<< HEAD
        $sql = "SELECT * FROM users WHERE username = '$username' ";
=======
<<<<<<< HEAD
        $sql = "SELECT * FROM users WHERE username = '$username' ";
=======
        $sql = "SELECT user_id FROM users WHERE username = '$username' and password = '$password'";
>>>>>>> 4a80673d9bcceeea10d19c460e55488f50da9730
>>>>>>> 8de4ecb9803d9c1e66cc6b48bb702ee942c9b92b
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);

        // If result matched $username and $password, table row must be 1 row

<<<<<<< HEAD
        if(password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $username;
            header("location: welcome.php");
            $_SESSION['login_error'] = False;
         }else {
            $_SESSION['login_error'] = True;
            header("location: loginPage.php");
=======
<<<<<<< HEAD
        if(password_verify($password, $row['password'])) {
            $_SESSION['login_user'] = $username;
            header("location: ../welcome.php");
            $_SESSION['login_error'] = False;
         }else {
            $_SESSION['login_error'] = True;
            header("location: ../loginPage.php");
=======
        if($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: ../welcome.php");
         }else {
            header("location: error.php");
>>>>>>> 4a80673d9bcceeea10d19c460e55488f50da9730
>>>>>>> 8de4ecb9803d9c1e66cc6b48bb702ee942c9b92b
         }
    }
?>