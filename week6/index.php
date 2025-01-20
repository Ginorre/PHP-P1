<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="process_form.php" method="POST">
        <label for="name">Voor en achternaam</label>
        <input type="text" id="name" name="name">

        <label for="email">Email</label>
        <input type="text" id="email" name="email">

        <input type="submit" name="submit_form" value="submit">

        <label for="Message">Berichten</label>
        <textarea name="message" id="message"></textarea>
    </form>

    <?php 

    include'process-form.php';
    
    ?>

    
</body>
</html>