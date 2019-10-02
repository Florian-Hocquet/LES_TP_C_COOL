<?php
require('base.inc.php');

$query = 'SELECT id, email, date FROM user';

if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

while($dbRow=mysqli_fetch_assoc($dbResult)){
    echo$dbRow['id'].'<br/>';
    echo$dbRow['email'].'<br/>';
    echo date('d.m.Y',strtotime($dbRow['date']));
    echo'<br/><br/>';
}

echo 'Bonjour, Mickaël' . '<br/>'
    . 'Votre inscription a bien été enregistrée, merci.';
?>