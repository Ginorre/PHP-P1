<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobbelsteen spel</title>
    <script>
       
        function gooiDobbelsteen() {
            fetch('dobblesteen.php') 
                .then(response => response.text()) 
                .then(data => {
                    document.getElementById('resultaat').innerHTML = data;
                });
        }
    </script>
</head>
<body>

<div id="resultaat">
    <?php
$randomGetal = rand(1,6);
echo "<br>Je hebt gegooid: $randomGetal;";

if ($randomGetal == 6) {
    echo " Congrats, You Won ";
} else {
    echo " Awh, You Lost Noobie ";
}
?>
</div>
    <button onclick="gooiDobbelsteen()">Try Again!</button>
</body>
</html>