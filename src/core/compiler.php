<?php

/*
 * Main archive, where all the magic of interpretation takes place.
 * 
 */

namespace Codew;

require_once __DIR__ . '/CompileFile.php';

class Compiler
{
    /**
     * Method to compile only one file
     * @param string $from
     * @param string $to
     */
    
    public function file($from, $to)
    {
        $compiler = new CompileFile($from, $to);
    }
    
    /**
     * Method to compile a directory
     * @param string $directory
     */

    public function directory($directory)
    {
        $structure = new RecursiveTreeIterator(new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS));
        
        foreach($structure as $path) {
            $path = ltrim($path, '\|- ');
    
            if (substr($path, -4) == '.pcp') {
                $fphp = str_replace('.pcp', '.php', $path);
                $this->compileFile($path, $fphp);
            }
        }
    }

    /**
     * Method to compile a directory and create a folder with compiled files
     * @param string $directory
     */
    
    public function toDirectory($directory)
    {
        // ..
    }
}
