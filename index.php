<?php

require './vendor/autoload.php';

use App\Native\URL;

$views = URL::call([
    'welcome' => 'welcome'
]);

URL::index($views);

?>
