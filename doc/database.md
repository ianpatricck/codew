# Database

- MySQL
- PostgreSQL

### Namespace

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


```fetch```
```php
$user = $db->query('SELECT name FROM users WHERE id = 1')->fetch();

echo $user->name;
```

Select all data from users

```php
$users = $db->query('SELECT * FROM users WHERE id = 1')->fetch('all');

var_dump($users);
```

From this simple method, we can define several queries to execute with the help of these secondary functions
