<?php

require_once __DIR__ . '/../config/define.php';

function noArgv($argv)
{
    if (!isset($argv)) {
        echo "\n[-] No input args\n";
    }
}

function start($argv, $port = PORT)
{
    if ($argv == 'server') {
        echo "Starting codew PHP server ...\n";
        echo exec('php -S localhost:' . $port);
    }
}

function createController($argv, $name)
{
    if ($argv == 'create:controller') {
        if (!$name) {
            echo "\n[-] Failed to create controller\n";
        } else {

            $content = "<?php\n\nnamespace App\Controllers;\n\nclass $name\n{\n\t// ..\n}";
        
            $file_controller = fopen('app/Controllers/'.$name.'.php', 'w');
        
            fwrite($file_controller, $content);
            fclose($file_controller);
        
            echo "\n[+] Controller created successfully\n";
        }
    }
}

function createComplex($argv)
{
    if ($argv == 'create:complex') {
        $complex = 'vendor/codew/complex/';

        $dashboard  =       $complex . 'dashboard.view.php';
        $register   =       $complex . 'register.view.php';
        $login      =       $complex . 'login.view.php';
        $update     =       $complex . 'update.view.php';

        $index      =       $complex . 'index.php';
        $controller =       $complex . 'Complex.php';
        $css        =       $complex . 'complex.css';
        $sql        =       $complex . 'complex.sql';

        copy($dashboard, 'view/dashboard.view.php');
        copy($register, 'view/register.view.php');
        copy($login, 'view/login.view.php');
        copy($update, 'view/update.view.php');
        copy($index, 'index.php');
        copy($controller, 'app/Controllers/Complex.php');
        copy($css, 'assets/css/complex.css');
        copy($sql, 'config/complex.sql');

        echo "\nComplex successfully created\n";

    }
}

function removeComplex($argv)
{
    if ($argv == 'remove:complex') {
        $index_content = "<?php\n\nrequire __DIR__ . '/codew.php';\n\nuse App\Controllers\WelcomeController;\n\nWelcomeController::viewer();\n";

        $index = fopen('index.php', 'w');
        
        fwrite($index, $index_content);
        fclose($index);
        
        @ unlink('view/dashboard.view.php');
        @ unlink('view/register.view.php');
        @ unlink('view/login.view.php');
        @ unlink('view/update.view.php');
        @ unlink('app/Controllers/Complex.php');
        @ unlink('assets/css/complex.css');
        @ unlink('config/complex.sql');

        echo "\nComplex successfully removed\n";

    }
}

function databaseComplex($argv)
{
    // ..
}