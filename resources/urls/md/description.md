## `#` Description

<br>
<br>

### => URL

<br>

_This is how you can work with URL redirects on your pages_

<br>

```html
<a href='?redirect'>I will redirect to the page redirect.php</a>
```
<br>

_You can change the settings for URLS calls in the url.config.php file located in the settings folder._

<br>
<br>

__app / Config / url.config.php__

<br>
<br>

```php
<?php

const INDEX_FOLDER = 'resources/urls/';
const INDEX_VIEW = 'init';

?>
```

<br>
<br>

_The constant INDEX FOLDER refers to the folder where your URL files will be viewed._<br>_The INDEX VIEW constant refers to the default file or index, if URLs are not found, it will also serve as your application's home page._

<br>
<br>

__index.php__

<br>
<br>

```php
<?php

require __DIR__ . '/app.php';

use App\Codew\URL;

$views = URL::call([
    'init' => 'init'
]);

URL::index($views);

?>
```

<br>
<br>

_You can also call more pages in the associative matrix of the call method,<br>
in addition to passing parameters to your URL. <br> the array key in the URL refers 
to the name of the URL passed in, while the value is the 
name of the file in the URLs folder._

<br>
<br>

### => Database

<br>
<br>

_The file in which you can configure the settings in your
database whether PostgreSQL or MySQL is located at:_

<br>

__app / Config / db.config.php__

<br>
<br>

```php
<?php

const HOST = 'localhost';
const DB_NAME = 'codeworker';
const USERNAME = 'root';
const PASSWORD = '';

?>
```

<br>

_In the Instances.php file located in the app, you can define the database option using the $db variable._

<br>
<br>

_To manipulate SQL in your project it is recommended to work on the except.php file 
which is also located at the root of the project.<br>
In it is made all the exceptions of form submission and <br>data manipulation that go 
straight to your database. We will also know some shortcuts that facilitate the typing of 
queries within the project._

<br>
<br>

__resources / urls / form.php__

<br>
<br>

```html
<form action="" method="POST">;
    <input type="text" name="name"/>;
    <input type="submit" value="Submit" name="submit"/>;
</form>;
```

<br>
<br>

__except.php__

<br>
<br>

```php
<?php

use App\Codew\Form;

if (isset($_POST['submit'])) {
    global $db;

    $name = Form::text($_POST['name']);

    $db->insert('users', ['id' => 1, 'name' => $name]);
}

?>
```

<br>
<br>

_Above we have an example of insertion of data very simple to be understood
in which the verification validates the data type in the<br>
variable $text and then we use the insert method of 
class DB to make the insertion of a name where the id is equal to 1._

<br>

_Here are more methods that can be used from the Form and DB classes:_

<br>
<br>

```php
<?php

$db->insert(':table', ['id' => :id, 'name' => ':name']);
$db->select(':table', ':column', ':columnCompare', ':valueCompare');
$db->update(':table', ':column', ':columnCompare', ['id' => :id,'name' => ':name']);
$db->delete(':table', ':columnCompare', ':valueCompare');

?>
```

<br>

```php

<?php

use App\Native\Form;

$name = Form::text($_POST['name']);                                     # Sanitize text
$email = Form::email($_POST['email']);                                   # Validate e-mail
$value = Form::int($_POST['value']);                                        # Validate integers
$money = Form::float($_POST['value']);                                   # Validate floats

$upload = Form::upload(
':input_name', 
'destiny_folder/', 
$size_bytes, 
['png', 'jpg', 'gif', 'pdf', 'txt']
);

# Returns the name of the random entry

?>
```

<br>
<br>

### => Controllers

<br>

_To view your data on your pages, a relationship between controllers 
and models is required, so we <br>can obtain data from our
database through the files in app/Controllers/.
To create them we use <br>the command __php run controller:file__
at the root of the project, to get more information about 
the run <br>file run the command __php run -h__ at the root of the project._