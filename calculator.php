<?php
include 'functions.inc.php';

start_page('titre');

?>

    <form action="calcul.php" method="post">
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="radio" name="op" value="+"/>+<br/>
    <input type="radio" name="op" value="-"/>-<br/>
    <input type="radio" name="op" value="/"/>/<br/>
    </form>


<?php

end_page();

?>