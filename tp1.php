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


<?php

echo'<strong>VoicimonpremierprogrammePHP</strong><br/>'."\n";echo'C\'estpasmalnon?<br/>';
$var1=6;
$var2=1.3;
$var3='Variable3';
echo"$var1+$var2";
echo$var1+$var2;

echo $var1 + $var3;

?>
