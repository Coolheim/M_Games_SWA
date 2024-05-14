<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_Games - kontakt</title>
    <link rel="stylesheet" href="..\css\kontakt.css">
    <link rel="icon" type="image/x-icon" href="../images/mgames_favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Hlavička -->
    <?php include "../php/hlavicka.php" ?>

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
            <img src="../images/kontaktImg.png">
        </div>
    </div>
</body>
</html>