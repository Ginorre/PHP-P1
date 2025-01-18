<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>

<style>
    footer{
        

    }
</style>
<body>

<footer>
    <hr>
    Author: Gino Elia <br>
    &copy; copyright reserved<br><br>

    <?php
      echo "Vandaag is het: ". date("Y-m-d H:i:s");
      echo "<br> een willeurig getal is: ". rand(1,100)
    ?>



</footer>

</body>
</html>