# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)
![Packagist Version](https://img.shields.io/packagist/v/codew/codew)

### The way to speed up my PHP development

---

```
$ composer require codew\codew
```

## Knowing the Codew

This is a method I created to optimize my PHP development time with little code writing, feel free to report errors in the project.

With this feature, the developer can perform tasks quickly without worrying about writing a giant block of native code for that purpose.

All code written in ```.pcp``` is compiled in ```.php``` for production, in the end, all code will be converted to PHP. However, all the work that can take hours to write a specific class and functions can be done in a short time using the new Codew syntax and methods.

```php
#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

$codew = new \Codew\Codew();
$codew->run($argv);
```

### Compile only one PCP file

```
$ php codew file.pcp -c file.php
```


### Compile an entire directory of PCP files

```
$ php codew -c [dir]
```

---

__Tip:__ Don't start the code with ```<?php```

```php
# CODEW FILE (.pcp)

import * from 'src/core';

for $value in $stmt {
    echo "{$value}\n";
}
```

## Methods added

```php
import * 'directory';
```

This function will import all PHP files from the directory

```php
for $item in $array {
    echo $item;
}
```

This functionality is an alternative to the traditional PHP function ```foreach``` for arrays

## Database

New ways of handling database functions have been created, native methods still work

```php
$connection = MYSQL_PDO('localhost', 'codew', 'root', '');
```

When adding this function and compiling the code, the MySQL connection call with PHP's native PDO will be reflected with the pre-configured UTF-8 attribute

```php
$connection = PGSQL_PDO('localhost', 'codew', 'root', '');
```

The same case occurs with PostgreSQL
