# Codeworker
<h3>Component to reduce your typing in scripts.</h3>
<hr>

<li><b>require('codeworker/codeworker.php');</b></li>
<br>

<h4>Some database functions</h4>

--> Insert data
<br>
<b><?php insert(':table', ['id' => 1, 'name' => 'admin', 'email' => 'admin@email.com', 'password' => 'admin']);?></b>
<br>
<br>
--> Select data
<br>
<b>select(':table', ':column', ':columnCompare', ':valueCompare');</b>
<br>
<br>
--> Delete data
<br>
<b>delete(':table', ':columnCompare', ':valueCompare');</b>
<br>
<br>
<hr>
<b>dropDB(':database');</b><br>
<b>dropTP(':table');</b>
<hr>

<h4>Database class methods</h4>

<b>$mysql->sqli(':query')</b> --->> It returns no value.<br>
<b>$mysql->sqlr(':query')</b> --->> Returns a value.
