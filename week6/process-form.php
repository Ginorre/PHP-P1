<?php

if (isset($_POST['submit_form'])) {
    
    if (isset($_POST['name']) && strlen($_POST['name']) < 3) {
        echo "De naam moet minimaal 3 tekens lang zijn.<br>";
    }

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

   
    if (empty($name) || empty($email)) {
        echo "Vul alstublieft zowel je naam als emailadres in.<br>";
    } else { 
        if (strpos($email, '@') === false) {
            echo "Het e-mailadres moet een '@' bevatten.<br>";
        }
       
        if (!empty($name)) {
            echo "Je naam is: " . htmlspecialchars($name) . "<br>";
        }
        if (!empty($email)) {
            echo "Je emailadres is: " . htmlspecialchars($email) . "<br>";
        }
     
        echo "Je bericht is: " . nl2br(htmlspecialchars($message)) . "<br>";
    }
}
?>