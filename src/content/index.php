<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    // $fphp = fopen($to, 'wb');

    // fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $lines = fgets($fpcp);

        $lines = str_replace(' ', ' -', $lines);
        $lines_array = explode('-', $lines);

        foreach ($lines_array as $key => $line) {
            if (in_array('echo ', $lines_array)) {
                $arr = str_split($line);
                array_push($arr, ';');

                foreach ($arr as $key => $value) {
                    echo $value;
                }
            }
        }

        // fwrite($fphp, $line);
    }

    fclose($fpcp);
    // fclose($fphp);
}
