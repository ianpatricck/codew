<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $lines = fgets($fpcp);
        $arr = [];

        $echo = '/echo/';
    
        if (preg_match($echo, $lines)) {
            $explode = explode("\n", rtrim($lines));
            
            foreach ($explode as $key => $value) {
                array_push($arr, $value . ";\n");
            }
    
            $lines = str_replace($lines, implode($arr), $lines);
        }

        fwrite($fphp, $lines);
    }

    fclose($fpcp);
    fclose($fphp);
}
