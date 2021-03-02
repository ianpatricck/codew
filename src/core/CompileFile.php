<?php

/*
 * Class where a file is compiled (.pcp)
 * 
 */

namespace Codew;

require_once __DIR__ . '/code/sintax.php';
require_once __DIR__ . '/code/repeat.php';

class CompileFile
{
    private $from;
    private $to;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;

        $fpcp = fopen($this->from, 'r');
        $fphp = fopen($this->to, 'wb');

        fwrite($fphp, "<?php\n\n");

        while (!feof($fpcp)) {
            $content = fgets($fpcp);
            $newContent = [];

            if (preg_match(MYSQL_PDO[0],  $content) && preg_match(MYSQL_PDO[1],  $content)) {
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
    
            if (preg_match(PGSQL_PDO[0],  $content) && preg_match(PGSQL_PDO[1],  $content)) {
                $explodeInitial = explode(' = ', $content);
                $explodeMiddle = explode('PGSQL_PDO(', $explodeInitial[1]);
                $explodeFinal = explode(');', $explodeMiddle[1]);
                $explode = explode(', ', $explodeFinal[0]);
                
                $host = str_replace(array('\'', '"'), '', $explode[0]);
                $dbname = str_replace(array('\'', '"'), '', $explode[1]);
                $username = $explode[2];
                $password = $explode[3];
    
                $content = str_replace(
                    $content,
                    implode($newContent),
    
                    $explodeInitial[0] . " = new PDO(\"pgsql:host=$host;dbname=$dbname\", $username, $password);\n" .
                    rtrim($explodeInitial[0]) . "->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n" .
                    rtrim($explodeInitial[0]) . "->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);\n"
                );
            }
            
            fwrite($fphp, $content);
        }
    
        fclose($fpcp);
        fclose($fphp);
    }
}
