<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_Games - kontakt</title>
    <link rel="stylesheet" href="..\css\kontakt.css">
</head>
<body>
    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Get in touch</h2>
                <hr>
            </div>
            <input type="hidden" name="access_key" value="99de51e6-7d02-465f-a456-99f45b065d3f">
            <input type="text" name="name" placeholder="Your name" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Your email" class="contact-inputs" required>
            <textarea name="message" placeholder="Your message" class="contact-inputs" required></textarea>
            <button type="submit">Submit <img src="../images/right-arrow.png" height="20" width="20"></button>
        </form>
        <div class="contact-right">
            <img src="../images/kontaktImg.png">
        </div>
    </div>
</body>
</html>