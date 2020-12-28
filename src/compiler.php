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

            if ($explode[0] == "") {
                $tabs = [];

                foreach($explode as $key => $val) {
                    if ($val == "") {
                        array_push($tabs, "$val ");
                    }
                }

                $explode = array_merge(array_filter($explode), []);
                $content = str_replace($content, implode($newContent), implode($tabs) . 'foreach (' . $explode[3] . ' as ' . $explode[1] . ") {\n");
            } else {
                $content = str_replace($content, implode($newContent), 'foreach (' . $explode[3] . ' as ' . $explode[1] . ") {\n");
            }

        }

        if (arrows($content)) {
            //
        }
        
        fwrite($fphp, $content);
    }

    fclose($fpcp);
    fclose($fphp);

    $climate->green('File compiled successfully');
}
