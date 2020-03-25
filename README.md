# Codeworker
<h3>Component to reduce your typing in scripts.</h3>
<hr>

<li>require('codeworker/codeworker.php');</li>

<p>Specify your connection to the database and data in the 'codeworker.php' file.
You can use the methods of the MySQL class or the functions of the 'func.php' file.</p>

<li>$mysql->CREATE_USERS();</li>

<p>Create user table for testing, with identification, name, email and password.</p>

<li>$mysql->DROP(':table');</li>

<p>Delete a table from the database.</p>

<li>$mysql->SQL(':query');</li>

<p>Insert SQL commands.</p>

<hr>

Use <b>select(':table', ':column', ':value', ':value to compare');</b>
To facilitate the SQL query.
