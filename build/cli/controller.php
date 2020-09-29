<?php

function createController($argv, $name)
{
    if ($argv == 'create:controller') {
        if (!$name) {
            echo "\n[-] Failed to create controller\n";
        } else {

            $content = "<?php\n\nnamespace Controllers;\n\nclass $name\n{\n\t// ..\n}";
        
            $file_controller = fopen('controllers/'.$name.'.php', 'w');
        
            fwrite($file_controller, $content);
            fclose($file_controller);
        
            echo "\n[+] Controller created successfully\n";
        }
    }
}