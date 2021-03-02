<?php

namespace Codew;

require_once __DIR__ . '/core/compiler.php';

use Codew\Compiler;

class Codew
{
    public function run($args)
    {
        $climate = new \League\CLImate\CLImate;
        $compiler = new \Codew\Compiler;

        if (in_array('-c', $args) && substr($args[1], -4) == '.pcp' && substr($args[3], -4) == '.php') {
            $compiler->file($args[1], $args[3]);
        } else if (in_array('-c', $args) && $args[1] == '-c') {
            $compiler->directory($args[2]);
        } else {
            $climate->red('Failed to compile');
        }

        $climate->green('Compiled successfully');
    }
}
