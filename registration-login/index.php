<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up</title>

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
            // If not logged in then display sign up page.
            ?>
        <div class="main">

            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" action="signup_validate.php" id="signup-form" class="signup-form">
                            <h2 class="form-title">Create account</h2>
                            <div class="form-group">
                                <input type="text" class="form-input" name="fullname" id="fullname" maxlength="20"
                                    placeholder="Full Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" maxlength="50"
                                    placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <input type="radio" value="Male" name="gender" required /> Male
                                <input type="radio" value="Female" name="gender" required /> Female
                            </div>
                            <div class="form-group">
                                <select name="fav_language" class="form-input" required>
                                    <option value="">Select Favourite Language</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="Java">Java</option>
                                    <option value="PHP">PHP</option>
                                    <option value="HTML">HTML</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="password" id="password" maxlength="15"
                                    minlength="3" placeholder="Password" required />
                                <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="confirm_password" id="confirm_password"
                                    maxlength="15" minlength="3" placeholder="Confirm your password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" checked disabled name="agree-term" id="agree-term"
                                    class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                    statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
                            </div>
                        </form>
                        <p class="loginhere">
                            Have already an account ? <a href="login.php" class="loginhere-link">Sign In</a>
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