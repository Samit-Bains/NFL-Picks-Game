<?php
    include('../session.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_SESSION['login_user'];
        $league_name = $_POST["league_name"];
        $_SESSION['league_name'] = $_POST["league_name"];

        // $sql = "INSERT INTO leagues (league_name) "
        // . "VALUES ('$league_name')";
        
        $sql = "UPDATE users SET league_name = '$league_name' WHERE username = '$username'";
        
        //If the query is successful, user is redirected to league page
        if($db->query($sql) === true){
            header("Location: leaguePage.php");
        }
    }
?>


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_SESSION['login_user'];
        $league_name = $_POST["league_name"];
        $_SESSION['league_name'] = $_POST["league_name"];

        $sql = "INSERT INTO leagues (league_name) "
        . "VALUES ('$league_name')";
        
        
        //If the query is successful, user is redirected to league page
        if($db->query($sql) === true){
            header("Location: leaguePage.php");
        }
    }
?>