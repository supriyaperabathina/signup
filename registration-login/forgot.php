<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forgot Password</title>

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
            // If not logged in then display forgot page.
            ?>
        <div class="main">

            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" action="reset.php" id="signup-form" class="signup-form">
                            <h2 class="form-title">Forgot Password</h2>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" maxlength="50"
                                    placeholder="Enter Your Email" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
                            </div>
                        </form>
                        <p class="loginhere">
                            <a href="login.php" class="loginhere-link">
                                < Go Back to Sign In</a>
                        </p>
                    </div>
                </div>
            </section>

        </div>
        <?php
        }
        ?>
    </body>

</html>