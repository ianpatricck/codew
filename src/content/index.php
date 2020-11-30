<?php

function compile($from, $to)
{
    $fpcp = fopen($from, 'r');
    $fphp = fopen($to, 'wb');

    fwrite($fphp, "<?php\n\n");

    while (!feof($fpcp)) {
        $line = fgets($fpcp);

        fwrite($fphp, $line);
    }

    fclose($fpcp);
    fclose($fphp);

// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

    $fphp = fopen($to, 'r');

    while (!feof($fphp)) {
        $line = fgets($fphp);
        echo $line;
    }

    fclose($fphp);
}
