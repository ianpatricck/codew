<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CRUD</title>

    <link rel="stylesheet" href="<?php staticFile('css/crud.css'); ?>">
</head>
<body>

    <div class="container">
        <h2>Register</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirm" placeholder="Confirm password">

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>