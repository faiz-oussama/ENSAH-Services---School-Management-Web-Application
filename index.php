<?php
include($_SERVER['DOCUMENT_ROOT'] . '/ENSAHify/views/auth/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<script type="text/javascript"> window.history.forward();</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ENSAHify - Login</title>
    <link rel="shortcut icon" href="public/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="public/assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="public/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                
                <div class="loginbox" style="height: 550px;">
                    <div class="login-left">
                        <img class="img-fluid" style="height: 550px;" src="public/assets/img/login.jpg" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Welcome to ENSAH Grades</h1>
                            <p class="account-subtitle">Need an account? <a href="register.html">Sign Up</a></p>
                            <h2>Sign in</h2>
                            
                            <form action="views/auth/login.php" method="post">
                                <?php if(isset($_SESSION['error'])) { ?>
                                    <div class="form-group">
                                        <span class="alert alert-danger" style="display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: .25rem;" role="alert">
                                            <i class="fas fa-exclamation-triangle"></i> 
                                            <?php foreach ($_SESSION['error'] as $error) {
                                                echo $error;
                                                }
                                                unset($_SESSION['error']);  ?>
                                        </span>
                                    </div> 
                                <?php } ?>
                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name="email">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Password <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="password" name="password">
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="forgotpass">
                                    <div class="remember-me">
                                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me">
                                            Remember me
                                            <input type="checkbox" name="remember" value="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="public/assets/js/jquery-3.6.0.min.js"></script>
    <script src="public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/feather.min.js"></script>
    <script src="public/assets/js/script.js"></script>
</body>

</html>