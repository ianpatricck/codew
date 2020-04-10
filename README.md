# Codeworker
### Component to reduce your typing in scripts.

```php
require('codeworker/codeworker.php');
````

#### Some database functions

```php
$mysql->insert(':table', [
    'id' => :id,
    'name' => ':name',
    'email' => ':email',
    'password' => ':password'
]);
````

```php
$mysql->select(':table', ':column', ':columnCompare', ':valueCompare');
````

```php
$mysql->update(':table', [
    'id' => :id,
    'name' => ':name',
    'email' => ':email',
    'password' => ':password'
], ':column', ':columnCompare');
````

```php
$mysql->delete(':table', ':columnCompare', ':valueCompare');
````
---
```php
$mysql->sqli(':query');

// -->  It returns no value.

$value = $mysql->sqlr(':query');

// -->  Returns a value.

````

#### Form class

```php
$name = Form::text($_POST['name']);
````

```php
$email = Form::email($_POST['email']);
````

```php
$value = Form::int($_POST['value']);
````

```php
$money = Form::float($_POST['value']);
````

```php
$upload = Form::upload(':input_name', [
    'png', 'jpg', 'git', 'pdf', 'exe', 'dll', 'txt'
], 'dest_folder/', $size_bytes);

// -->  Returns the name of the random entry
````
