<?php

function makeController($name)
{
    $content = "<?php

namespace App\Controllers;

class $name
{
    // ..
}

";

    $file_controller = fopen('app/Controllers/'.$name.'.php', 'w');

    fwrite($file_controller, $content);
    fclose($file_controller);

    echo 'Controller created successfully';
}