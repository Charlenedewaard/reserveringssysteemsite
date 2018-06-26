<?php
include_once 'config.php';
include('functions.php') ?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
<?php
include_once "header.php";
?>
<div class="header teal">
    <h2>Register</h2>
</div>
<form name="myForm" action="register.php"  method="post" >
    <?php echo display_error(); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" id="username" name="username" value="<?php echo $username ?>">
    </div>
    <div id="messageusername">
        <p id="letterusername" class="invalid">Must have a username</p>
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="text" id="email" name="email" value="<?php echo $email ?>">
    </div>
    <div id="messageemail">
        <p id="letteremail" class="invalid">Must contain <b>@</b></p>
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" id="psw" name="password_1"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" id="confirmpsw" name="password_2">
    </div>
    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        <p id="match" class="invalid">Must match <b>first password</b></p>
    </div>
    <div>
        <div >
            <img id="captcha" src="securimage/securimage/securimage_show.php" alt="CAPTCHA Image" />
            <div class="input-field">
                <input id="captchaInput" type="text" name="captcha_code" class="validate" onkeyup="validateForm()" size="10" maxlength="6" />
                <label for="captchaInput" id="code">Type de code in</label>
                <span class="errors"><?= isset($errors['captcha']) ? $errors['captcha'] : '' ?></span><br>
                <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
            </div><br>
        </div>
    <div class="input-group">
         <button type="submit" id="submit" class="btn teal waves-effect waves-light" name="register_btn" disabled>Register</button>
    </div>
    <p>
        Heeft u al een account? <a href="login.php">Sign in</a>
    </p>
</form>
<script src="main.js" ></script>
</body>
</html>