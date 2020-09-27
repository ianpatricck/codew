# @ Codew
### The way to speed up my PHP development

---

## # Install

```
$ composer create-project codew/codew myapp
```

---

## # Knowing the Codew

Codew is a project in constant development to help organize and write code.

This is a project created by me to supply my time in language development with clean and light code, feel free to report errors in the application and errors in code writing.

With this feature, the developer can perform tasks quickly and with better use at the source code, being free to create all your business rules your way and set your own standards. 

## # Config

The configuration file for the constants can be found in ```config/define.php``` where you can make changes to the database and application settings in general.

```php
<?php

// => PHP config

define('PORT', 80);

define('INDEX_PAGE', 'home');

// => Database config

define('HOST', '127.0.0.1');
define('DB_NAME', 'codew');
define('USERNAME', 'root');
define('PASSWORD', '');
```

## # CLI

There are parameters to be passed on the command line to speed up development, from running the server to creating a controller. For the execution of this resource we can use the run file as a path, located at the root of the project.

```
$ php run [command]
```

Here is a list of useful commands:

---

<br>

```
$ php run server
$ php run create:controller [controller name]
```

## # Globals

The native functions of the project are resources to be used almost always. The __$var__ variable is a design variable reserved for the ```view()``` and ```push()``` functions and should be avoided in certain cases.

The ```view()``` function has the task of viewing a system page, obtaining the file from the viewing directory.

```php
view('about', ['msg' => $msg]);
```

The second parameter to be passed is some variable for viewing on the page.
It can be done as follows:

```php
<?= $var['msg']; ?>
```

---

Not unlike the preview function, ```push()``` also returns a page, but with a parameter in the URL as an identifier

```php
push('profile', 1, ['opt' => $opt]);
```

We also have the redirect function that works via PHP's ```header('Location')```.

```php
redirect('page');
```

We can also use the function that checks if a session exists within a view, which facilitates the development of a login system, for example.

```php
<!DOCTYPE html>
<?= sessionVerify('logged'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codew</title>
</head>
<body>
    <!-- code -->
</body>
</html>
```

If the session does not exist, the user is returned to the home page set in the __INDEX_PAGE__ constant.

---

```php
import('file');
import(['file1', 'file2'], 'arr');
import(['directory' => ['file']], 'arr2');
import('directory', 'glob');
```

Formats to include files in an automated way.

The 'glob' attribute is used to request all .php files located in the directory.
