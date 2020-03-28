# Codeworker
### Component to reduce your typing in scripts.

```php 
require('codeworker/codeworker.php');
````

#### Some database functions

* Insert data 
```php
insert(':table', [
  'id' => :id, 
  'name' => ':name', 
  'email' => ':email', 
  'password' => ':password']);

````
* Select data
```php
select(':table', ':column', ':columnCompare', ':valueCompare');
````
* Delete data
```php
delete(':table', ':columnCompare', ':valueCompare');
````
```php
dropDB(':database');
dropTP(':table');
```

#### Database class methods

```php
$mysql->sqli(':query'); // It returns no value.
$mysql->sqlr(':query'); // Returns a value.
````
