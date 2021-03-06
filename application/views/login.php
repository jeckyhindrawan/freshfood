<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url()  . "/assets/styles/login.css" ?>">
</head>

<body>

    <div class="container">
        <?= base_url() ?>
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url() . 'login/actionLogin' ?>" class="sign-in-form" method="POST">
                    <h2 class="title">Sign In</h2>
                    <h2>
                        <?= $this->session->flashdata('message'); ?>
                    </h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required
                            value="<?= set_value('username'); ?>" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required />
                    </div>
                    <input type="submit" class="btn solid" value="Login" />
                </form>
                <div class="signUpContainer">
                    <a class="btnSignup" href="<?= base_url() . 'signup'; ?>">Or Sign Up Now</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>