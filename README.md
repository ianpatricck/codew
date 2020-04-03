# Codeworker
### Component to reduce your typing in scripts.

```php
require('codeworker/codeworker.php');
````

#### Some database functions

* Insert data
```php
$mysql->insert(':table', [
    'id' => :id,
    'name' => ':name',
    'email' => ':email',
    'password' => ':password'
]);

````
* Select data
```php
$mysql->select(':table', ':column', ':columnCompare', ':valueCompare');
````
* Delete data
```php
$mysql->delete(':table', ':columnCompare', ':valueCompare');
````
---
```php
$mysql->dropDB(':database');
$mysql->dropTP(':table');
```

```php
$mysql->sqli(':query'); // It returns no value.
$value = $mysql->sqlr(':query'); // Returns a value.
````

#### Form class

```php
$name = Form::text($_POST['name']);
````
```php
$email = Form::email($_POST['email']);
````
```php
$pass = Form::text(md5($_POST['password']));
````
```php
$value = Form::int($_POST['value']);
````
```php
$money = Form::float($_POST['money']);
````
