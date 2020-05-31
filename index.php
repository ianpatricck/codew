<?php

require './vendor/autoload.php';

use app\native\URL;

$views = URL::call([
    'welcome' => 'welcome'
]);

URL::index($views);

?>
