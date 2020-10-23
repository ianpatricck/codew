<?php 

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/build/before.php';

import('config/config');
import('classes/DB');
import('classes/Input');
import('classes/Request');
import('classes/Router');
import('config/calls');
import('build/fs');
import('controllers', 'glob');
