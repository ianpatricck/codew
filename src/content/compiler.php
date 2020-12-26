<?php

function compile($from, $to)
{
    $climate = new \League\CLImate\CLImate;

    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    $import = true;

    while (!feof($fpcp)) {
        $content = fgets($fpcp);
        $newContent = [];

        if ($import) {
            // $explode = explode('<<', $content);
            // $content = str_replace($content, implode($newContent), 'require __DIR__ . "' . substr(trim($explode[1]), 0, -1) . "\";\n");
            
            echo $content;
        }
        
        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
