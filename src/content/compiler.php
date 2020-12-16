<?php

function compile($from, $to)
{
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

        if (!preg_match('/function/', $content) && preg_match('/\(\)/', $content) && !preg_match('/\{/', $content)) {
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

        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);
}
