<?php
include_once 'config.php';
include('functions.php') ?>



<!DOCTYPE html>
<html>
<head>
    <title>Reserveren kampingplek</title>
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
<?php
include_once "header.php";
?>
<div class="header teal">
    <h2>Register</h2>
</div>
<form name="myForm" action="register.php" onsubmit="return validateForm()" method="post" >
    <?php echo display_error(); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div>
        <div >
            <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <div class="input-field">
                <input id="captchaInput" type="text" name="captcha_code" class="validate" onkeyup="validateForm()" size="10" maxlength="6" />
                <label for="captchaInput" id="code">Type de code in</label>
                <span class="errors"><?= isset($errors['captcha']) ? $errors['captcha'] : '' ?></span><br>
                <a href="#" onclick="document.getElementById('captcha').src = 'includes/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
            </div><br>
            <div class="input-field">
                <input id="captchaInput" type="text" name="captcha_code" class="validate" onkeyup="validateForm()" size="10" maxlength="6" />
                <label for="captchaInput" id="code">Type de code in</label>
                <span class="errors"><?= isset($errors['captcha']) ? $errors['captcha'] : '' ?></span><br>
                <a href="#" onclick="document.getElementById('captcha').src = 'includes/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
            </div><br>
        </div>
    <div class="input-group">
        <button type="submit" class="btn teal waves-effect waves-light" name="register_btn">Register</button>
    </div>
    <p>
        Heeft u al een account? <a href="login.php">Sign in</a>
    </p>
</form>
<script src="main.js" ></script>
</body>
</html>