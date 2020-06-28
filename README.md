# codeworker
### Project to improve your productivity at the time of development.

---

## Installation

```composer create-project codeworker/codeworker myproject```

```php
require 'app/app.php';
```

This is a feature to automate some functions in the development.

---
### Native namespace

- URL class

```html
<a href="?default_view_file">Default</a>
```

```php

require 'app/app.php';

use App\Native\URL;

$views = URL::call([
    'default_view_file' => 'default_file_name',
    'other_view_file' => 'file_name'
]);

URL::index($views);
```

- Insert SQL query

```php
$stmt = new Null_DB();                                  # Initialize MySQL with no database created
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
$stmt->update(':table', ['id' => :id,'name' => ':name'], ':column', ':columnCompare');
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

$upload = Form::upload(':input_name', [
    'png', 'jpg', 'gif', 'pdf', 'txt'
], 'destiny_folder/', $size_bytes);                     # Returns the name of the random entry
```
