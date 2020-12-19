<?php

function compile($from, $to)
{
    $climate = new \League\CLImate\CLImate;

    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $content = fgets($fpcp);
        $newContent = [];

        if (preg_match('/import/', $content)) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), 'require __DIR__ . ' . rtrim($explode[1]). ";\n");
        }

        if (
            preg_match('/\$/', $content) &&
            preg_match('/=/', $content) &&
            preg_match('/\(/', $content) &&
            preg_match('/\)/', $content) &&
            preg_match('/\{/', $content) &&
            !preg_match('/function/', $content)
        ) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), $explode[0] . ' = function ' . $explode[2]. " {\n");
        }

        if (
            preg_match('/echo/', $content) ||
            preg_match('/print/', $content) ||
            preg_match('/\$/', $content) &&
            !preg_match('/\{/', $content) &&
            !preg_match('/\[/', $content) ||
            preg_match('/\(/', $content) &&
            preg_match('/\)/', $content)
        ) {
            $content = addSemicolon($content);
        }

        if (
            preg_match('/function/', $content) ||
            preg_match('/for/', $content)
        ) {
            $content = removeSemicolon($content);
        }

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}

function addSemicolon($content)
{
    return !preg_match('/;/', $content) ? rtrim($content) . ";\n" : $content;
}

function removeSemicolon($content)
{
    return preg_match('/;/', $content) ? substr(rtrim($content), 0, -1) . "\n" : $content;
}
