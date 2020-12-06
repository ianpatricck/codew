<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    // $fphp = fopen($to, 'wb');

    // fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $lines = fgets($fpcp);

        $lines = str_replace(' ', '-', $lines);
        echo $lines;

        $lines = explode('-', $lines);

        foreach ($lines as $key => $line) {
            if (in_array('echo', $lines)) {
                // echo $line;
            }
        }

        // fwrite($fphp, $line);
    }

    fclose($fpcp);
    // fclose($fphp);
}
