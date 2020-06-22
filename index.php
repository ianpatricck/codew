<?php

require './vendor/autoload.php';

# URL namespace

use App\Native\URL;

# Call URL function

$views = URL::call([
    'welcome' => 'welcome'
]);

# Index URL's

URL::index($views);

?>
