<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m_games";

// Připojení k MySQL serveru
$conn = new mysqli($servername, $username, $password);

// Kontrola připojení
if ($conn->connect_error) {
    die("Připojení selhalo: " . $conn->connect_error);
}

// Kontrola existence databáze
$result = $conn->query("SHOW DATABASES LIKE '$dbname'");
if (!$result || $result->num_rows == 0) {
    // Vytvoření databáze, pokud neexistuje
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) !== TRUE) {
        die("Chyba při vytváření databáze: " . $conn->error);
    }
}

// Uzavření spojení s MySQL serverem
$conn->close();

// Připojení k určené databázi
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola připojení
if ($conn->connect_error) {
    die("Připojení k databázi selhalo: " . $conn->connect_error);
} else {
    echo "Připojení k databázi úspěšné";
}

// Vytvoření tabulky forum_data, pokud neexistuje
$sql_create_table = "CREATE TABLE IF NOT EXISTS forum_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    comment TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    reply_id INT
)";
if ($conn->query($sql_create_table) !== TRUE) {
    die("Chyba při vytváření tabulky: " . $conn->error);
}

// Provádění operací s databází
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO forum_data (name, comment, reply_id) VALUES ('$name', '$comment', '$reply_id')";
  mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/forum.css"> <!-- Odkaz na externí CSS soubor -->
  <title>Document</title>
</head>
<body>
<header>
    <div class="header">
    <div class="header-title">
        <a href="../index.php">M - Games</a>
        <hr>
    </div>
    <nav class="header-btn">
        <a href="forum.php" class="btn1">Forum |</a>
        <a href="kontakt.php" class="btn1">Contact us</a>
    </nav>
    </div>
</header>
<main>
  <div class="left-container">
    <div class="container">
      <?php
      $datas = mysqli_query($conn, "SELECT * FROM forum_data WHERE reply_id = 0");
      foreach($datas as $data) {
        require 'forum/comment.php';
      }
      ?>
      <form action="" method="post">
        <h3 id="title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" placeholder="Your name">
        <textarea name="comment" placeholder="Your comment"></textarea>
        <button class="submit" type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
  <div class="right-container">
      <img src="../images/forum_background.png">
  </div>
  
</main>
  
<script>
  function reply(id, name){
    title = document.getElementById('title');
    title.innerHTML = "Reply to " + name;
    document.getElementById('reply_id').value = id;
  }
</script>
</body>
</html>
