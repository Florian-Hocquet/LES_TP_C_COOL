<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
    lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};

?>

<?php

start_page('titre');

?>

<hr/><br/><strong>Test</strong><br/><hr/>

<?php
echo date('l F d, Y');
?>

<?php
$jour = date('l F d, Y');
?>

<?php
$jour = date('d/m/Y', strtotime('2020-04-01'));
?>


<?php

function end_page()
{
    echo '</body></html>';
};
?>

<?php

end_page();

?>


<?php

//echo'<strong>VoicimonpremierprogrammePHP</strong><br/>'."\n";echo'C\'estpasmalnon?<br/>';
//$var1=6; // déclaration
//$var2=1.3; // déclaration
//$var3='Variable3'; // déclaration
//echo"$var1+$var2"; // affichage de $var1 + $var2
//echo$var1+$var2; // addition de 6 et 1,3
//
//echo $var1 + $var3; // erreur 6 + Variable3 0

?>

