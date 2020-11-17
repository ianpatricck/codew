# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![Packagist Version](https://img.shields.io/packagist/v/codew/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)

### The way to speed up my PHP development

---

## Install

```
$ composer require codew/codew
```

---

## Knowing the Codew

Codew is a component in constant development to help organize and write code.

This is a component created by me to supply my time in language development with clean and light code, feel free to report errors in the application and errors in code writing.

With this feature, the developer can perform tasks quickly and with better use at the source code, being free to create all your business rules your way and set your own standards. 

---

```php
<?php

require __DIR__ . "/vendor/autoload.php";

use Codew\Router;
use Codew\View;

$router = new Router();

$router->get("/", function () {
    View::view("home");
});

$router->run();
```

The above code that is in an ```index.php``` runs the page that displays ```home.php``` within the viewing directory ```views```. It is necessary to have the ```views``` directory in your project.

```
$ php -S 127.0.0.1:80
```
