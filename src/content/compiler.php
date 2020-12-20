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

        if (semicolons('add', $content)) {
            $content = !preg_match('/;/', $content) ? rtrim($content) . ";\n" : $content;
        }

        if (semicolons('remove', $content)) {
            $content = preg_match('/;/', $content) ? substr(rtrim($content), 0, -1) . "\n" : $content;
        }

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
