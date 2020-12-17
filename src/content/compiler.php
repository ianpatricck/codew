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

        if (preg_match('/echo/', $content) || preg_match('/\$/', $content) && !preg_match('/\{/', $content)) {
            $explode = explode("\n", rtrim($content));

            foreach ($explode as $key => $value) {
                if (!preg_match('/;/', $value)) {
                    array_push($newContent, $value . ";\n");
                }
            }

            $content = str_replace($content, implode($newContent), $content);
        }

        if (preg_match('/import/', $content)) {
            $explode = explode(' ', $content);
            $content = str_replace($content, implode($newContent), 'require __DIR__ . ' . rtrim($explode[1]).";\n");
        }

        if (preg_match('/\(/', $content) && preg_match('/\)/', $content) && !preg_match('/function/', $content)) {
            $content = !preg_match('/;/', $content) ? rtrim($content) . ";\n" : rtrim($content) . "\n";
        }

        if (preg_match('/function/', $content) && preg_match('/\(/', $content) && preg_match('/\)/', $content)) {
            $content = preg_match('/;/', $content) ? substr(rtrim($content), 0, -1) . "\n" : rtrim($content) . "\n";
        }

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
