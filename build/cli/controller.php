<?php

function createController($argv, $name)
{
    if ($argv == 'createController') {
        if (!$name) {
            echo "\n[-] Failed to create controller\n";
        } else {

            $content = "<?php\n\nnamespace Controllers;\n\nclass $name\n{\n\t// ..\n}";
        
            $file_controller = fopen('controllers/'. $name .'.php', 'w');
        
            fwrite($file_controller, $content);
            fclose($file_controller);
        
            echo "\n[+] Controller created successfully\n";
        }
    }
}

function removeController($argv, $name)
{
    if ($argv == 'removeController') {
        if (!$name) {
            echo "\n[-] Failed to remove controller\n";
        } else {
            @ $file_controller = file_get_contents('controllers/'. $name .'.php');

            if ($file_controller) {
                unlink('controllers/'.$name.'.php');        
                echo "\n[+] Controller removed successfully\n";
            } else {
                echo "\n[-] Failed to remove controller\n";
            }
        }
    }
}