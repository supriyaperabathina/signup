<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign In</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php
        // If already logged in then redirect to dashboard.
        require_once 'session.php';
        $logged_in=isset($_SESSION['username']);
        if($logged_in)
        {
            header($dashboard);
        } else{
            // If not logged in then display login page.
            ?>
        <div class="main">

            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" action="signin_validate.php" id="signup-form" class="signup-form">
                            <h2 class="form-title">Member Login </h2>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" maxlength="50"
                                    placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="password" id="password" maxlength="15"
                                    minlength="3" placeholder="Password" required />
                                <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <a href="forgot.php" class="loginhere-link" style="float:right">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign In" />
                            </div>
                        </form>
                        <p class="loginhere">
                            Don't have an account ? <a href="index.php" class="loginhere-link">Sign Up</a>
                        </p>
                    </div>
                </div>
            </section>

        </div>
        <?php
        }
        ?>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>