<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reset Password</title>

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
            // If not logged in then display reset page.
            $email = stripslashes($_POST['email']);
            if(strlen($email)<=0)
            {
                // Validation failed!
                echo "<script>alert('Please fill all the fields!');window.history.back()</script>";
            } else{
                $query_mail="SELECT * FROM users WHERE email='$email'";
                $check_mail = mysqli_query($conn,$query_mail);
                if(mysqli_num_rows($check_mail)>0){
                    // email found.
                } else{
                    // Email not found!
                    echo "<script>alert('Email not found!');window.history.back()</script>";
                }
            }
        }
        ?>

        <div class="main">

            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" action="reset_validate.php" id="signup-form" class="signup-form">
                            <h2 class="form-title">Reset Password</h2>
                            <div class="form-group">
                                <?php
                                echo '<input type="email" class="form-input" value="'.$_POST['email'].'" hidden name="email"
                                    id="email" placeholder="Email" required />';
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="new_password" id="new_password"
                                    placeholder="New Password" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="confirm_new_password"
                                    id="confirm_new_password" placeholder="Confirm New Password" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Reset" />
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
    </body>

</html>