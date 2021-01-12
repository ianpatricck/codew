<?php

namespace Codew;

require_once __DIR__ . '/compiler.php';

class Codew
{
    public function run($args)
    {
        $climate = new \League\CLImate\CLImate;

        if (in_array('-c', $args) && substr($args[1], -4) == '.pcp' && substr($args[3], -4) == '.php') {
            compile($args[1], $args[3]);
        } else if (in_array('-b', $args) && $args[2] == '-b') {
            echo 1;
        } else {
            $climate->red('Failed to compile file');
        }

        // php codew src/ -b dist/
    }
}
