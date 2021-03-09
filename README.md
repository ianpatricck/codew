# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)
![Packagist Version](https://img.shields.io/packagist/v/codew/codew)

### The way to speed up my PHP development

---

```
$ composer require codew\codew
```

## Knowing the Codew

This is a method I created to separate my development from the front-end so that it is possible to easily manage between teams that work on the client side and also on the server side, working with organization and productivity through API Rest.

### Packages

- [bramus/router](https://github.com/bramus/router)

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Codew\Codew();

$app->router('GET', '/', function() {
    echo 'Hello World';
});

$app->run();
```
