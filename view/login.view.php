<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CRUD</title>
    <link rel="stylesheet" href="<?php staticFile('css/crud.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="inline-text">
            <p class="title">codeworker ::</p> &nbsp;
            <h2>Login</h2>
        </div>
        <form action="" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Login</button>
        </form>
        <a href="/register">Register</a>
    </div>
</body>
</html>