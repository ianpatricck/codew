<?php

require __DIR__ . '/app/app.php';

use App\Native\URL;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);