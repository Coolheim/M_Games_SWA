<?php
    require 'connection.php';

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO user_info VALUES('','$username','$email','$password')";
        mysqli_query($conn,$query);

        echo "<script> alert('Data Inserted Successfully'); </script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_Games - prihlaseni</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../css/prihlaseni.css">
</head>
<body>
    <?php include "header.php" ?>

    <main>
    <div class="menuBTN">
        <a href="../index.php" class="btn1">Domů</a>
    </div>
    <div class="container">
        <form class="" action="" method="post" autocomplete="off">
            <input type="text" name="username" required value="" placeholder="Uživatelské jméno"><br>
            <input type="email" name="email" required value="" placeholder="E-mail"><br>
            <input type="password" name="password" required value="" placeholder="Password"><br>
            <!-- <button type="submit" name="submit">Submit</button> -->
            <input type="submit" name="submit">
        </form>
    </div>
    </main>

</body>
</html>