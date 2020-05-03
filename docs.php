<?php

# Database class functions

/*

$mysql->sqli(':query');                                                     | Insert sql query
$value = $mysql->sqlr(':query');                                            | Insert SQL query an returns a value

=================

$mysql->insert(':table', ['id' => :id, 'name' => ':name']);
$mysql->select(':table', ':column', ':columnCompare', ':valueCompare');
$mysql->update(':table', ['id' => :id,'name' => ':name'], ':column', ':columnCompare');
$mysql->delete(':table', ':columnCompare', ':valueCompare');

=================

*/

# Form class functions

/*

$name = Form::text($_POST['name']);                                         | Sanitize special chars
$email = Form::email($_POST['email']);                                      | Validate e-mail
$value = Form::int($_POST['value']);                                        | Validate integers
$money = Form::float($_POST['value']);                                      | Validate floats

$upload = Form::upload(':input_name', ['png', 'jpg', 'gif', 'pdf', 'txt'], 'dest_folder/', $size_bytes);

->  Returns the name of the random entry

=================

*/

?>
