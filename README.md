# Codeworker
<h3>Component to reduce your typing in scripts.</h3>
<hr>

<li><b>require('codeworker/codeworker.php');</b></li>
<br>
<p>Specify your connection to the database and data in the 'codeworker.php' file.<br>
You can use the methods of the MySQL class or the functions of the 'func.php' file.</p>

<li><b>$mysql->CREATE_USERS();</b></li>
<br>
<p>Create user table for testing, with identification, name, email and password.</p>

<li><b>$mysql->DROP(':table');</b></li>
<br>
<p>Delete a table from the database.</p>

<li><b>$mysql->SQL(':query');</b></li>
<br>
<p>Insert SQL commands.</p>

<hr>

Use <b>select(':table', ':column', ':value', ':value to compare');</b>
To facilitate the SQL query.
