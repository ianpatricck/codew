# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)
![Packagist Version](https://img.shields.io/packagist/v/codew/codew)

### The way to speed up my PHP development

---

```
$ composer require codew\codew
```

## Knowing the Codew

This is a method I created to provide my development time with little code writing, feel free to report errors in the application and errors when writing the project code.

With this feature, the developer can perform tasks quickly without worrying about writing a block of native code for any purpose.

```php
#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

$codew = new \Codew\Codew();
$codew->run($argv);
```

```
$ php codew file.pcp -c file.php
```

__Tip:__ Don't start the code with ```<?php``` :D

## + New methods added

```php
import << '/vendor/autoload.php';
```

This replaces ```require __DIR__ ```

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
