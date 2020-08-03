<?php

function makeController($name)
{
    $content = "<?php

namespace App\Controllers;
    
use App\Native\Controller;
    
class $name extends Controller
{
    // ..
}
    
";

    $file_controller = fopen('app/Controllers/'.$name.'.php', 'w');

    fwrite($file_controller, $content);
    fclose($file_controller);

    echo 'Controller created successfully';
}