<?php

require_once __DIR__ . '/rules.php';

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
            $explode = explode('<<', $content);
            $content = str_replace($content, implode($newContent), 'require __DIR__ . ' . trim($explode[1]) . "\n");
        }

        if (for_in($content)) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), 'foreach (' . $explode[3] . ' as ' . $explode[1] . ") {\n");
        }
        
        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
