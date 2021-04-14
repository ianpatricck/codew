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