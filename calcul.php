<?php
include 'functions.inc.php';

start_page('titre');

?>

<?php
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_POST['op'];
?>

<?php
if('*' == $op)
{
}
elseif('+' == $op)
{
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}
?>

<?php
$operateurs = '*+-/';
?>



<?php

end_page();

?>