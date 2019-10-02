<?php
include 'utils.inc.php';
require('base.inc.php');

start_page('TP2');

if (isset($_POST['Id'])){
    $id = $_POST['Id'];
}else {
    $id =" ";
}

if (isset($_POST['civil'])){
    $civil=$_POST['civil'];
}else {
    $civil =" ";
}

if (isset($_POST['email'])){
    $email=$_POST['email'];
}else {
    $email =" ";
}

if (isset($_POST['Mdp'])){
    $password=$_POST['Mdp'];
}else {
    $password =" ";
}

if (isset($_POST['Tel'])){
    $tel=$_POST['Tel'];
}else {
    $tel =" ";
}

if (isset($_POST['NomPays'])){
    $nomPays=$_POST['NomPays'];
}else {
    $nomPays =" ";
}

if (isset($_POST['Checkbox'])){
    $checkbox=$_POST['Checkbox'];
}else {
    $checkbox =" ";
}

if (isset($_POST['action'])){
    $action=$_POST['action'];
}else {
    $action = " ";
}

$date = date('Y.m.d');

$query='INSERT INTO user(ID, Civilité, email, Password, Password2, Téléphone, Pays, Date)VALUES(';
$query.='"'.$id.'",';
$query.='"'.$civil.'",';
$query.='"'.$email.'",';
$query.='"'.$password.'",';
$query.='"'.$password.'",';
$query.='"'.$tel.'",';
$query.='"'.$nomPays.'",';
$query.='"'.$date.'")';

if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

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

$query='INSERTINTOuser(date,email...)VALUES(\''.$today.'\',\''.$email.'\','.....')';


<a> votre mail a bien été envoyé</a> <br/>
<a href="TP2.php"> back </a> <br/>
