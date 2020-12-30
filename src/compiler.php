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
                echo $content;
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
        
        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
