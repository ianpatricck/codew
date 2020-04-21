<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/codeworker/view/static/css/stylesheet.css">
<title>Documentation</title>
</head>
<body>
    <h2 class="txt-center" style="margin-top: 100px;">Database class functions</h2>
    <hr style="width: 200px;">
    <div class="container" style="margin-top: 50px;">
        <div class="box">
            <p class="p2">$mysql->sqli(':query');</p>
            <p class="p2">$value = $mysql->sqlr(':query');</p>
            <hr class="hr-transparent">
            <p class="p">$mysql->insert(':table', ['id' => :id, 'name' => ':name']);</p>
            <p class="p">$mysql->select(':table', ':column', ':columnCompare', ':valueCompare');</p>
            <p class="p">$mysql->update(':table', ['id' => :id,'name' => ':name'], ':column', ':columnCompare');</p>
            <p class="p">$mysql->delete(':table', ':columnCompare', ':valueCompare');</p>
        </div>
    </div>

    <h2 class="txt-center" style="margin-top: 100px;">Form class functions</h2>
    <hr style="width: 200px;">
    <div class="container" style="margin-top: 50px;">
        <div class="box">
            <p class="p">$name = Form::text($_POST['name']);</p>
            <p class="p">$email = Form::email($_POST['email']);</p>
            <p class="p">$value = Form::int($_POST['value']);</p>
            <p class="p">$money = Form::float($_POST['value']);</p>
            <hr class="hr-transparent">
            <p class="p">$upload = Form::upload(':input_name', ['png', 'jpg', 'gif', 'pdf', 'txt'], 'dest_folder/', $size_bytes);</p>
            <p class="p b">>  Returns the name of the random entry</p>
        </div>
    </div>
</body>
</html>
