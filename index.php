<?php

require('codeworker.php');

$views = URL::call([
    'welcome' => 'welcome'
]);

URL::index($views);

?>
