<?php

require __DIR__ . '/requirements.php';

use App\Codew\URL;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);
