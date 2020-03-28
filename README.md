# Codeworker
### Component to reduce your typing in scripts.

require('codeworker/codeworker.php');

#### Some database functions

* Insert data >> insert(':table', ['id' => :id, 'name' => ':name', 'email' => ':email', 'password' => ':password']);
* Select data >> select(':table', ':column', ':columnCompare', ':valueCompare');
* Delete data >> delete(':table', ':columnCompare', ':valueCompare');
<hr>
+ dropDB(':database');
+ dropTP(':table');
<hr>

#### Database class methods

+ $mysql->sqli(':query'); --->> It returns no value.
+ $mysql->sqlr(':query'); --->> Returns a value.
