<?php

function securityEnable($argv)
{
    if ($argv == 'securityEnable') {
        $content = "Options -Indexes";
        
        $dir = [
            'app/.htaccess',
            'assets/.htaccess',
            'build/.htaccess',
            'config/.htaccess',
            'controllers/.htaccess',
            'vendor/.htaccess',
            'view/.htaccess',
        ];

        foreach ($dir as $htaccess) {
            $file = fopen($htaccess, 'w');
        
            fwrite($file, $content);
            fclose($file);
        }
        
        echo "\n[+] Safe and ready for production\n";
    }
}

function securityDisable($argv)
{
    if ($argv == 'securityDisable') {
        unlink('app/.htaccess');
        unlink('assets/.htaccess');
        unlink('build/.htaccess');
        unlink('config/.htaccess');
        unlink('controllers/.htaccess');
        unlink('vendor/.htaccess');
        unlink('view/.htaccess');

        echo "\n[+] deleted .htaccess\n";
    }
}