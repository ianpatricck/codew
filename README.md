# Codeworker
### Component to reduce your typing in scripts.

require('codeworker/codeworker.php');

#### Some database functions

1.Insert data
	insert(':table', ['id' => 1, 'name' => 'admin', 'email' => 'admin@email.com', 'password' => 'admin']);
2.Select data
	select(':table', ':column', ':columnCompare', ':valueCompare');
3.Delete data
	delete(':table', ':columnCompare', ':valueCompare');
<hr>
dropDB(':database');
dropTP(':table');
<hr>

#### Database class methods

$mysql->sqli(':query'); --->> It returns no value.
$mysql->sqlr(':query'); --->> Returns a value.
