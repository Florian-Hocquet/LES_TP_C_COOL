<?php
include 'utils.inc.php';

start_page('TP2');

$id=$_POST['Id'];
$civil=$_POST['civil'];
$email=$_POST['email'];
$password=$_POST['Mdp'];
$tel=$_POST['Tel'];
$nomPays=$_POST['NomPays'];
$checkbox=$_POST['Checkbox'];
$action=$_POST['action'];

if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;

    echo $message;

    mail($email, 'Vos identifiants', $message);
}

else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>


<a> votre mail a bien été envoyé</a> <br/>
<a href="TP2.php"> back </a> <br/>
