# Codeworker
<h3>Component to reduce your typing in scripts.</h3>
<hr>

<li><b>require('codeworker/codeworker.php');</b></li>
<br>

<h4>Some database functions</h4>

// Insert data
<br>
<b>insert(':table', [
'id' => 1,
'name' => 'admin',
'email' = 'admin@email.com',
'password' => 'admin'
]);</b>
<br>
// Select data
<br>
<b>select(':table', ':column', ':columnCompare', ':valueCompare');</b>
<br>
// Delete data
<br>
<b>delete(':table', ':columnCompare', ':valueCompare');</b>
<br>
<br>

<b>dropDB(':database');</b>
<b>dropTP(':table');</b>
<hr>

<h4>Database class methods</h4>

$mysql->sqli(':query')      // It returns no value.
$mysql->sqlr(':query')      // Returns a value.
