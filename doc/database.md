# Database

### \# Namespace

```php
use Codew\Database\DB;
```

To define the connection, it is appropriate to create a configuration file that will serve as a model for queries

```php
$db = new DB([
    'connection' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'codew',
    'user' => 'root',
    'password' => ''
]);
```

After that we can carry out your queries in the bank with the methods that the class provides us

```select```

Select all users from users table
```php
$users = $db->select(["*" => "users"])->fetch('all');
```

Select the name of the user who has the id equal to 1
```php
$user = $db->select(["name" => "users"])->where(["id" => 1])->fetch();
```

```insert```

```php
$db->insert("users", [
    "id" => 1,
    "name" => "John Smith",
    "pass" => "admin123"
]);
```