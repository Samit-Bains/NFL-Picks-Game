<?php
    include('php/session.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style/registerStyle.css">
    <link rel="stylesheet" type="text/css" href="style/welcomeStyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>NFL Picks Game</title>

  </head>
  <body>
            <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="welcome.php">NFL Picks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="php/logout.php">Log out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid pageContainer">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card mb-3 col-md-12">
                    <div class="card-body">     
                        <h2 class="card-title">Welcome <?php echo $_SESSION['login_user'] ?></h2>
                        <p class="card-text">You are ranked first place in your league!</p>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 col-md-12">
                    <div class="card-body">
                        <h2 class="card-title">Leagues</h2>
                        <p class="card-text">You are not in a league yet! Click below to create or join one</p>
                        <ul>
                            <li><a href="">Create league</a></li>
                            <li><a href="">Join league</a></li>
                            <li><a href="">Play alone</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3 col-md-12">
                    <div class="card-body">
                        <h2 class="card-title">Matches</h2>
                        <p class="card-text">You're record is:</p>
                        <ul>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="card col-sm-8">
                <div class="card-header">
                    Leaderboard
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Player 1</li>
                    <li class="list-group-item">Player 2</li>
                    <li class="list-group-item">Player 3</li>
                </ul>
            </div>
        </div> 
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; 2018</p>
        </div>
        <!-- /.container -->
    </footer>
            
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>