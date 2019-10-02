<?php
$dbLink = mysqli_connect('mysql-florianhocquet.alwaysdata.net', '189838', 'floflo83140')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'florianhocquet_database')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));