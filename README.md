# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)
![Packagist Version](https://img.shields.io/packagist/v/codew/codew)

### The way to speed up my PHP development

---

```
$ composer require codew\codew
```

## Knowing the Codew

This is a method created by me to supply my time in the development of languages with clean and light code, feel free to report errors in the application and errors in writing the code.

With this resource, the developer can perform tasks quickly and with better use of the source code, being free to create all his business rules in his own way and define his own standards.

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
