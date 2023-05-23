<?php
$retour = mail('armand.hinvi@gmail.com', $_POST['Subject'], $_POST['message'], $_POST['email']);
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
?>