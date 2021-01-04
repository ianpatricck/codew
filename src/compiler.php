<?php

require_once __DIR__ . '/rules.php';
require_once __DIR__ . '/repeat.php';

function compile($from, $to)
{
    $climate = new \League\CLImate\CLImate;

    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $content = fgets($fpcp);
        $newContent = [];

        if (import($content)) {
            $explode = explode(' ', $content);

            if ($explode[0] == "") {
                $explodeFinal = array_merge(array_filter($explode), []);
                $content = str_replace($content, implode($newContent), implode(tabs($explode)) . 'require __DIR__ . ' . trim($explodeFinal[2]) . "\n");
            } else {
                $content = str_replace($content, implode($newContent), 'require __DIR__ . ' . trim($explode[2]) . "\n");
            }
        }

        if (for_in($content)) {
            $explode = explode(' ', $content);

            if ($explode[0] == "") {
                $explodeFinal = array_merge(array_filter($explode), []);
                $content = str_replace($content, implode($newContent), implode(tabs($explode)) . 'foreach (' . $explodeFinal[3] . ' as ' . $explodeFinal[1] . ") {\n");
            } else {
                $content = str_replace($content, implode($newContent), 'foreach (' . $explode[3] . ' as ' . $explode[1] . ") {\n");
            }
        }

        if (mysql_pdo($content)) {
            $explodeInitial = explode(' = ', $content);
            $explodeMiddle = explode('MYSQL_PDO(', $explodeInitial[1]);
            $explodeFinal = explode(');', $explodeMiddle[1]);
            $explode = explode(', ', $explodeFinal[0]);
            
            $host = str_replace(array('\'', '"'), '', $explode[0]);
            $dbname = str_replace(array('\'', '"'), '', $explode[1]);
            $username = $explode[2];
            $password = $explode[3];

            $content = str_replace(
                $content, 
                implode($newContent), 

                $explodeInitial[0] . " = new PDO(\"mysql:host=$host;dbname=$dbname\", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));\n" .
                rtrim($explodeInitial[0]) . "->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n" .
                rtrim($explodeInitial[0]) . "->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);\n"
            );
        }

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
