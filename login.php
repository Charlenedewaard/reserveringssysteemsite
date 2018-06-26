<?php
include_once'config.php';
include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once "header.php" ?>
<div class="header teal">
    <h2>Login</h2>
</div>
<form method="post" action="login.php">

    <?php echo display_error(); ?>

    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn waves-effect waves-light" name="login_btn">Login</button>
    </div>
    <p>
        Nog geen account? <a href="register.php">Sign up</a>
    </p>
</form>
</body>
</html>