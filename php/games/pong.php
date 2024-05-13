<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pong Game</title>
    <link rel="stylesheet" href="../../css/pong.css">
    <link rel="icon" type="image/x-icon" href="../../images/mgames_favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../scripts/pongGame.js"></script>
</head>
<body>
    <!-- Hlavička -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="	fa fa-th-list"></i>
        </label>
        <label class="logo">M - games</label>
        <ul>
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../forum.php">Forum</a></li>
            <li><a href="../kontakt.php">Contact us</a></li>
        </ul>
    </nav>


    <div id="pongDiv">
        <canvas id="board"></canvas> <!-- Game -->
    </div>
    
</body>
</html>