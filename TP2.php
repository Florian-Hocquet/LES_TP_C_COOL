<?php
include 'utils.inc.php';
?>

<form action="data-processing.php" method="post">
    <input type="text" name="Id" value="Identifiant"/><br/><br/>
    <input type="radio" name="Civilité" value="Homme"/><br/>
    <input type="radio" name="Civilité" value="Homme"/><br/><br/>
    <input type="text" name="E-mail" value="E-mail"/><br/><br/>
    <input type="password" name="mdp" value="Mot de passe"/><br/>
    <input type="password" name="mdp" value="Mot de passe"/><br/><br/>
    <input type="text" name="tel" value="Téléphone"/><br/><br/>
    <select name="Nom Pays">
        <option value="France"> France </option>
        <option value="France"> Italie </option>
        <option value="France"> Royaume-Uni </option>
        <option value="France"> Allemagne </option>
        <option value="France"> Espagne </option>
        <option value="France"> Mongolie </option>
        </select><br/>
    <input type="checkbox" name="checkbox" value="check"/><br/><br/>
    <input type="submit" name="action" value="mailer"/><br/>
</form>