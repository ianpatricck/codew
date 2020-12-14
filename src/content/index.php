<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $content = fgets($fpcp);
        $newContent = [];
    
        if (preg_match('/echo/', $content)) {
            $explode = explode("\n", rtrim($content));
            
            foreach ($explode as $key => $value) {
                array_push($newContent, $value . ";\n");
            }
    
            $content = str_replace($content, implode($newContent), $content);
        }
    
        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);
}
