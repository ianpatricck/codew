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

You can use the API class to make requests on routes

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

---

## Database

You can choose to use the database connection configuration in two namespaces

### Connection namespace

```php
$connection = new Codew\Database\Connection([
    'connection' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'codew',
    'user' => 'root',
    'password' => ''
]);
```

### DB namespace

```php
$db = new Codew\Database\DB([
    'connection' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'codew',
    'user' => 'root',
    'password' => ''
]);
```

You can use the DB ```query``` method to make clean queries.
The 'all' en ```fetch``` parameter means that the query will return all data

```php
$users = $db->query('SELECT * FROM users')->fetch('all');

foreach ($users as $user) {
    echo "{$user->name}<br>";
}
```

See more information about the ```DB namespace``` in [database documentation](doc/database.md)
