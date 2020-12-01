<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    // $fphp = fopen($to, 'wb');

    // fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $line = fgets($fpcp);

        $chars = explode(' ', $line);
        var_dump($chars);
        // fwrite($fphp, $line);
    }

    fclose($fpcp);
    // fclose($fphp);
}
