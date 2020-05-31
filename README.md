# Codeworker
### Component to reduce your typing in scripts.

---

## Install

```json
{
    "require": {
        "codeworker/codeworker": "1.0.0"
    }
}
````
or ```composer require codeworker/codeworker```

```php
require './vendor/autoload.php';
````

This is a feature to automate some functions in the development.

---
### Native namespace

```php
# app/Config.php

require 'native/Null_DB.php';
require 'native/MySQL.php';

####################################

const VIEWS_FLD = 'welcome/';       # Folder view location
const INDEX_VIEW = 'welcome';       # File default for views

####################################
```

#### URL class

```php
require './vendor/autoload.php';

use app\native\URL;

$views = URL::call([
    'default_view_file' => 'default_file_name',
    'other_view_file' => 'file_name'
]);

URL::index($views);
```

#### Insert sql query
```php
use app\native\Null_DB;
use app\native\MySQL;

$stmt = new Null_DB('localhost', 'root', '');           # Initialize MySQL with no database created
$stmt = new MySQL('localhost', 'devst', 'root', '');    # Initialize normal MySQL class

$stmt->sqli(':query');
$value = $stmt->sqlr(':query');                         # Insert SQL query and returns a value
````

```php

/*
*   Shortcuts for queries
*/

$stmt->insert(':table', ['id' => :id, 'name' => ':name']);
$stmt->select(':table', ':column', ':columnCompare', ':valueCompare');
$stmt->update(':table', ['id' => :id,'name' => ':name'], ':column', ':columnCompare');
$stmt->delete(':table', ':columnCompare', ':valueCompare');
````

---

#### Validate inputs with Form class
```php
use app\native\Form;

$name = Form::text($_POST['name']);                     # Sanitize text
$email = Form::email($_POST['email']);                  # Validate e-mail
$value = Form::int($_POST['value']);                    # Validate integers
$money = Form::float($_POST['value']);                  # Validate floats

$upload = Form::upload(':input_name', [
    'png', 'jpg', 'gif', 'pdf', 'txt'
], 'destiny_folder/', $size_bytes);                     # Returns the name of the random entry
````
