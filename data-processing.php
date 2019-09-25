<?php

$identifiant=$_POST('Id');
$sexe=$_POST('Sexe');
$email=$_POST('E-mail');
$password=$_POST('Mdp');
$tel=$_POST('Tel');
$nomPays=$_POST('NomPays');
$checkbox=$_POST('Checkbox');
$action=$_POST('action');

if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;
}

else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>