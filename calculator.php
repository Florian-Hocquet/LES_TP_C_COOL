<?php
include 'functions.inc.php';

start_page('titre');

?>

    <form action="calcul.php" method="post">
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
    </form>


<?php

end_page();

?>