# @ Codew

![GitHub repo size](https://img.shields.io/github/repo-size/ianpatricck/codew) ![Packagist Version](https://img.shields.io/packagist/v/codew/codew) ![GitHub](https://img.shields.io/github/license/ianpatricck/codew)

### The way to speed up my PHP development

---

- [bramus/router](https://packagist.org/packages/bramus/router)
- [league/plates](https://packagist.org/packages/league/plates)

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

require __DIR__ . '/vendor/autoload.php';

use Codew\Router;
use Codew\Render;

$router = new Router();

$router->get('/', function () {
    Render::view('home');
});

$router->run();
```

The above code that is in an ```index.php``` runs the page that displays ```home.php``` within the viewing directory ```views```. It is necessary to have the ```views``` directory in your project.

```
$ php -S 127.0.0.1:80
```

To view static files, you can use the ```path``` function in your index file.

```php
Render::path();

$router->get('/', function () {
    Render::view('home');
});
```

In this way, it will be possible to access the files of the entire project.

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?= path('public/style.css') ?>">
</head>
<body>
    <!-- content -->
</body>
</html>
```

Supports ```GET```, ```POST```, ```PUT```, ```DELETE```, ```OPTIONS```, ```PATCH``` and ```HEAD``` request methods.

```php
$router->get('pattern', function() { /**/ });
$router->post('pattern', function() { /**/ });
$router->put('pattern', function() { /**/ });
$router->delete('pattern', function() { /**/ });
$router->options('pattern', function() { /**/ });
$router->patch('pattern', function() { /**/ });
```

Visit [bramus/router](https://packagist.org/packages/bramus/router) for more information on routes.

For the rendering of data coming from the routes we use the [plates](http://platesphp.com/) syntax (native PHP templates).


```php
$router->get('/', function () {
    Render::view('home', ['msg' => 'Hello World']);
});
```

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1><?= $msg ?></h1>
</body>
</html>
```
