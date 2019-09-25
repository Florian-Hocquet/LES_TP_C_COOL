<?php
include 'utils.inc.php';


// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR');
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST');
// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');
?>

<form action="calcul.php" method="post">
    <input type="text" name="Id" value="Identifiant"/><br/>
    <input type="radio" name="Civilité" value="Sexe"/><br/>
    <input type="text" name="E-mail" value="E-mail"/><br/>
    <input type="password" name="mdp" value="Mot de passe"/><br/>
    <input type="password" name="mdp" value="Mot de passe"/><br/>
    <input type="text" name="tel" value="Téléphone"/><br/>
    <select name="Nom Pays">
        <option value="France"> France </option>
        <option value="France"> Italie </option>
        <option value="France"> Royaume-Uni </option>
        <option value="France"> Allemagne </option>
        <option value="France"> Espagne </option>
        <option value="France"> Mongolie </option>
        </select>
    <input type="checkbox" name="op1" value="values 2"/><br/>
    <input type="submit" name="op1" value="values 2"/><br/>
</form>