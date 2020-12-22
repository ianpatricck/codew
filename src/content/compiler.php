<?php

require __DIR__ . '/expressions.php';

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
            $content = str_replace($content, implode($newContent), 'require __DIR__ . ' . rtrim($explode[1]). ";\n");
        }

        if (closures($content)) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), $explode[0] . ' = function ' . $explode[2]. " {\n");
        }

        if (forIn($content)) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), 'foreach (' . $explode[3] . ' as ' . $explode[1] . ") {\n");
        }

        if (arrow($content)) {
            $explode = explode('((', $content);
            $content = str_replace($content, implode($newContent), $explode[0] . '(function (' . $explode[1]);
        }

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
