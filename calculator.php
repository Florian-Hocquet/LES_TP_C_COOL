<?php
include 'functions.inc.php';

start_page('titre');

?>

<?php
$operateurs = '*+-/';
?>

<?php
for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
{
    echo '<input ';
    if($cpt == 0)
    {
        echo 'checked="checked" ';
    }
    echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $op
erateurs[$cpt] . ' <br/>' . "\n";
}
?>
    Testez à nouveau

<?php

end_page();

?>