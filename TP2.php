<?php
include 'utils.inc.php';


// Correspond à l’adresse IP de celui qui visualise la page.
echo getenv('REMOTE_ADDR');
// Correspond à l’adresse IP du serveur.
echo getenv('HTTP_HOST');
// Correspond au logiciel serveur Web utilisé.
echo getenv('SERVER_SOFTWARE');
?>

<?php
phpinfo();
?>

<form action="calcul.php" method="post">
    <input type="text" name="Id" values="Identifiant"/><br/>
    <input type="radio " name="Civilité" values="Sexe"/><br/>
    <input type="text " name="E-mail" values="E-mail"/><br/>
    <input type="password" name="mdp" values="Mot de passe"/><br/>
    <input type="password " name="mdp" values="Mot de passe"/><br/>
    <input type="text " name="tel" values="Téléphone"/><br/>
    <select name="Nom Pays">
        <option values="France"> France </option>
        <option values="France"> Italie </option>
        <option values="France"> Royaume-Uni </option>
        <option values="France"> Allemagne </option>
        <option values="France"> Espagne </option>
        <option values="France"> Mongolie </option>
        <select>
    <input type="checkbox" name="op1" values="values 2"/><br/>
            <input type="submit" name="op1" values="values 2"/><br/>
</form>