# @ Codew
### The way to speed up my PHP development

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
php run [command]
```

Here is a list of useful commands:

---

<br>

```
$ php run server
```
```
$ php run create:controller [controller name]
```