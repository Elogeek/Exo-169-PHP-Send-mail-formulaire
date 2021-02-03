<?php

if(isset($_POST['message']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['objet'])) {

    $username = trim(strip_tags(htmlentities($_POST['username'])));
    $email = trim(strip_tags($_POST['email']));
    $objet = trim(strip_tags($_POST['objet']));
    $message = trim(strip_tags($_POST['message']));

    $headers = [
        'MIME-Version: 1.0' . "\r\n",
        'Content-type: text/html; charset=utf-8' . "\r\n",
        'From: ' . $_POST['email'] . "\r\n",
        'priority:normal'
    ];

    //vérif 500  max caractères au message
    if($message === 500) {
        $message = 500;
    }

    // vérif mail : en utilisant filter()
    if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        $_POST($email);
    }

    //envoyer à + user
    $email = explode(",",$email);
    // Gérer ton mail

if(isset($_POST['success']) && intval($_POST['success']) === 1) {
    ?>
    alert("Votre message a bien été envoyé !");
   <?php
    header('Location: ../index.php?succes = 1');
}

}











