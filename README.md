# Codeworker
<h3>Component to reduce your typing in scripts.</h3>
<hr>

<li>require('codeworker/codeworker.php');<li>

Specify your connection to the database and data in the 'codeworker.php' file.
You can use the methods of the MySQL class or the functions of the 'func.php' file.

<li>$mysql->CREATE_USERS();</li>

Create user table for testing, with identification, name, email and password.

<li>$mysql->DROP(':table');</li>

Delete a table from the database.

<li>$mysql->SQL(':query');</li>

Insert SQL commands.

<hr>

Use select(':table', ':column', ':value', ':value to compare');

To facilitate the SQL query.
