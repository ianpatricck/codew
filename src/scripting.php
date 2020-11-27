<?php

namespace Codew;

class Codew
{
    public function run($args)
    {       
        if (in_array('-c', $args) && substr($args[1], -4) == '.pcp') {
            echo 'true';
        } else {
            $climate = new \League\CLImate\CLImate;
            echo $climate->red("Failed to compile file: invalid extension or invalid command syntax.");
        }
    }
}
