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
//echo date('l F d, Y');
?>

<?php
$jour = date('l F d, Y');
?>

<?php
$jour = date('d/m/Y', strtotime('2001-03-12'));
$jour2 = date ('F d, Y, h:i a', strtotime('2001-03-12 22:16' ));
echo $jour . '</br>' . $jour2;
?>

<?php
<input checked="checked" type="radio" name="op" value="*"/>*<br/>;
<input type="radio" name="op" value="+"/>+<br/>;
<input type="radio" name="op" value="-"/>-<br/>;
<input type="radio" name="op" value="/"/>/<br/>;
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

