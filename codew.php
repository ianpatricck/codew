<?php 

/*
 * Requirements for the application to work.
 *
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/before.php';
require __DIR__ . '/config/config.php';

import('classes');

require __DIR__ . '/config/calls.php';
require __DIR__ . '/build/fs.php';

import('controllers');
