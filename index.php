<?php

require __DIR__ . '/app.php';

use App\Codew\URL;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);