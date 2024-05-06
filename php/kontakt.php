<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_Games - kontakt</title>
    <link rel="stylesheet" href="..\css\kontakt.css">
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


    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Contact us</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="99de51e6-7d02-465f-a456-99f45b065d3f">
            <input type="text" name="name" placeholder="Your name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Your email" class="contact-inputs" required>
            <textarea name="message" placeholder="Your message" class="contact-inputs" required></textarea>
            <button type="submit">Submit</button>
        </form>
        <div class="contact-right">
            <a href="https://www.youtube.com/watch?v=q-Y0bnx6Ndw">
                <img src="../images/kontaktImg.png">
            </a>
        </div>
    </div>
</body>
</html>