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
        
            $file_controller = fopen('app/controllers/'.$name.'.php', 'w');
        
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

        $dashboard          =       $complex . 'dashboard.view.php';
        $register           =       $complex . 'register.view.php';
        $login              =       $complex . 'login.view.php';
        $update             =       $complex . 'update.view.php';

        $index              =       $complex . 'index.php';
        $css                =       $complex . 'complex.css';
        $sql                =       $complex . 'complex.sql';

        copy($dashboard, 'view/dashboard.view.php');
        copy($register, 'view/register.view.php');
        copy($login, 'view/login.view.php');
        copy($update, 'view/update.view.php');
        copy($index, 'index.php');
        copy($css, 'assets/css/complex.css');
        copy($sql, 'config/complex.sql');

        echo "\n[+] Complex successfully created\n";

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
        @ unlink('app/controllers/User.php');
        @ unlink('app/controllers/Viewer.php');
        @ unlink('assets/css/complex.css');
        @ unlink('config/complex.sql');

        echo "\n[-] Complex successfully removed\n";

    }
}

function createComplexDB($argv)
{
    $complex = 'vendor/codew/complex/';

    if ($argv == 'create:mysql:complex') {
        $conn = new PDO('mysql:host='.HOST, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $complex_sql = file_get_contents('config/complex.sql');

        $stmt = $conn->prepare($complex_sql);
        $stmt->execute();
        
        $UserControllerMySQL = $complex . 'mysql/UserController.php';
        $ViewerControllerMySQL = $complex . 'mysql/ViewerController.php';

        copy($UserControllerMySQL, 'app/controllers/User.php');
        copy($ViewerControllerMySQL, 'app/controllers/Viewer.php');
        
        echo "\n[+] Codew database created\n";
    } elseif ($argv == 'create:pgsql:complex') {
        $conn = new PDO('pgsql:host='.HOST, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        
        $complex_sql = file_get_contents('config/complex.sql');

        $stmt = $conn->prepare($complex_sql);
        $stmt->execute();

        $UserControllerPgSQL = $complex . 'pgsql/UserController.php';
        $ViewerControllerPgSQL = $complex . 'pgsql/ViewerController.php';

        copy($UserControllerPgSQL, 'app/controllers/User.php');
        copy($ViewerControllerPgSQL, 'app/controllers/Viewer.php');

        echo "\n[+] Codew database created\n";
    }
}

function removeComplexDB($argv)
{
    if ($argv == 'remove:mysql:complex') {
        $conn = new PDO('mysql:host='.HOST.';dbname=codew', USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $stmt = $conn->prepare('DROP DATABASE codew');
        $stmt->execute();
    
        echo "\n[-] Codew database removed\n";
    } elseif ($argv == 'remove:pgsql:complex') {
        $conn = new PDO('pgsql:host='.HOST.';dbname=codew', USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        $stmt = $conn->prepare('DROP DATABASE codew');
        $stmt->execute();
        
        echo "\n[-] Codew database removed\n";
    }
}
