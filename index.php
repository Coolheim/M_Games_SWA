<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M - Games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "php/header.php" ?>
    
    <main>
        <div class="menuBTN">
            <a href="php/prihlaseni.php" class="btn1">Přihlášení</a>
            <a href="#" class="btn1">Kontakt</a>
        </div>

        <div class="gamesDiv">
            <a class="gamesButton" href="php/games/pong.php">
            <img src="images/ping-pong.png" height="200" width="200">
            <br>
            <span>Pong</span>
            </a>

            <a class="gamesButton" href="php/games/breakout.php">
            <img src="images/breakout.png" height="200" width="200">
            <br>
            <span>Breakout</span>
            </a>
        </div>
    </main>
    

    <footer>
        &copy; M - games
    </footer>

    <script src="script.js"></script>
</body>
</html>

