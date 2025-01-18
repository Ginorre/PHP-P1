<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <style>
        button {
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
    include 'navbar.php'
    ?>

    <h1>dit is een contact page</h1>
    <form action="contact.php">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br><br>
        <label for="Message">Message Us!</label><br><br>
        <textarea name="Message" id="Message" style="width: 200px; height:300px;">Write Message Here</textarea><br>
        <button type="button" onclick="alert('Message Sent')">Send Message</button>
    </form>
    <?php
    include 'footer.php'
    ?>
</body>
</html>