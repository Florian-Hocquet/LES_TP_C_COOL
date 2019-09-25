<?php

$identifiant=$_POST('Id');
$sexe=$_POST('Sexe');
$email=$_POST('E-mail');
$password=$_POST('Mdp');
$tel=$_POST('Tel');
$nomPays=$_POST('NomPays');
$checkbox=$_POST('Checkbox');
$action=$_POST('action');

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