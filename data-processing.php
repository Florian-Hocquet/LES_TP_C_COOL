<?php


$message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
$message .= 'Email : ' . $email . PHP_EOL;
$message .= 'Mot de passe : ' . PHP_EOL . $password;

if($action == 'mailer')
{
}

else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>