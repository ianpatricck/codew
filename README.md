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

$app->cors();
$app->json();

$app->router('GET', '/', function() {
    Codew\API::response(['message' => 'Hello World']);
});

$app->run();
```

You can define environment variables with the env function

```php
$app->env(__DIR__);

$app->router('GET', '/', function() {
    echo getenv('ENV_VAR');
});
```

---

## API

You can use the API class to make requests within the routes

```php
use Codew\Codew;
use Codew\API;

$app = new Codew();

$app->cors();
$app->json();

$app->router('GET', '/get', function() {
    $users = API::get("https://jsonplaceholder.typicode.com/users");

    API::response($users);
});
```

### POST Request

```php
use Codew\Codew;
use Codew\API;

$app = new Codew();

$app->cors();
$app->json();

$app->router('GET', '/post', function() {
    $post = API::post("https://jsonplaceholder.typicode.com/posts", [
        "userId" => 11,
        "id" => 102,
        "title" => "Hello World",
        "body" => "This my POST request"
    ]);

    API::response($post);
});
```