# Codeworker
### Component to reduce your typing in scripts.

---

#### Install

```json
{
    "require": {
        "codeworker/codeworker": "dev-master"
    }
}
````
or ```composer require codeworker/codeworker dev-master```

```php
require __DIR__ . "./vendor/codeworker/codeworker/codeworker.php";
````

This is a feature to automate some functions in the development.

---

#### Insert sql query
```php
$mysql->sqli(':query');
````
#### Insert SQL query an returns a value
```php
$value = $mysql->sqlr(':query');
````

```php
$mysql->insert(':table', ['id' => :id, 'name' => ':name']);
$mysql->select(':table', ':column', ':columnCompare', ':valueCompare');
$mysql->update(':table', ['id' => :id,'name' => ':name'], ':column', ':columnCompare');
$mysql->delete(':table', ':columnCompare', ':valueCompare');
````

---

#### Sanitize special chars
```php
$name = Form::text($_POST['name']);
````
#### Validate e-mail
```php
$email = Form::email($_POST['email']);
````
#### Validate integers
```php
$value = Form::int($_POST['value']);
````
#### Validate floats
```php
$money = Form::float($_POST['value']);
````
#### Returns the name of the random entry
```php
$upload = Form::upload(':input_name', ['png', 'jpg', 'gif', 'pdf', 'txt'], 'dest_folder/', $size_bytes);
````

---

To use the views in the codeworker you first need to define the index and directory
of the views and their application in the config/const.php file.


Sintaxe:

```php
$views = URL::call([
    'default_view_file' => 'default_file_name',
    'other_view_file' => 'file_name'
]);

URL::index($views);
```
