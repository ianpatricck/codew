# codeworker
### Project to improve your productivity at the time of development.

---

## Installation

```composer create-project codeworker/codeworker myproject```

This is a feature to automate some functions in the development.

---
### Native namespace

- URL class

```html
<a href="?default_view_file">Default</a>
```

```php
require __DIR__ . '/app/app.php';

use App\Native\URL;

$views = URL::call([
    'default_view_file' => 'default_file_name',
    'other_view_file' => 'file_name'
]);

URL::index($views);
```

- Insert SQL query

```php
$stmt = new MySQL();                                    # Initialize normal MySQL class
$stmt = new PgSQL();                                    # Initialize normal PgSQL class
```

```php
$stmt->sqli(':query');                                  # Insert SQL query
$value = $stmt->sqlr(':query');                         # Insert SQL query and returns a value
```

```php

# Shortcuts for queries

$stmt->insert(':table', ['id' => :id, 'name' => ':name']);
$stmt->select(':table', ':column', ':columnCompare', ':valueCompare');
$stmt->update(':table', ':column', ':columnCompare', ['id' => :id,'name' => ':name']);
$stmt->delete(':table', ':columnCompare', ':valueCompare');
```

---

- Validate inputs with Form class

```php
use App\Native\Form;

$name = Form::text($_POST['name']);                     # Sanitize text
$email = Form::email($_POST['email']);                  # Validate e-mail
$value = Form::int($_POST['value']);                    # Validate integers
$money = Form::float($_POST['value']);                  # Validate floats

$upload = Form::upload(
    ':input_name', 
    'destiny_folder/', 
    $size_bytes, 
    ['png', 'jpg', 'gif', 'pdf', 'txt']
);                                                      # Returns the name of the random entry
```
