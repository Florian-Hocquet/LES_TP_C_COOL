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

function end_page()
{
    echo '</body></html>';
};
?>

<?php

end_page();

?>