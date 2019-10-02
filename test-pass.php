<?php
include 'utils.inc.php';
require('base.inc.php');

start_page('TP2');

if (isset($_POST['login'])){
    $id = $_POST['login'];
}else {
    $id =" ";
}

if (isset($_POST['password'])){
    $mdp=$_POST['password'];
}else {
    $mdp =" ";
}

$query="SELECT ID,Password FROM user where ID = '$id' and Password = '$mdp'";

if(!($dbResult=mysqli_query($dbLink, $query))){
    echo'Erreur de requête<br/>';
    //Affiche le type d'erreur.
    echo'Erreur:'.mysqli_error($dbLink).'<br/>';
    //Affiche la requête envoyée.
    echo'Requête:'.$query.'<br/>';
    exit();
}

($dbRow=mysqli_fetch_assoc($dbResult));
echo $dbRow['id'] . '<br/>';
echo $dbRow['email'] . '<br/>';
echo $dbRow['connection_date'] . '<br/>';
echo '<br/><br/>';

if ($id == $dbRow['id'] && $mdp == $dbRow['password']) {
    $_SESSION['login'] = 'ok';
    $_SESSION['id'] = $id;
    $_SESSION['password'] = $mdp;
    header('Location: page1.php');

} else {
    header('Location: page2.php');

}

