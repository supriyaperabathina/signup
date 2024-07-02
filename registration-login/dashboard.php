<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="main">
            <section class="signup">
                <div class="container">
                    <div class="signup-content" style="text-align:center">
                        <?php
                    require_once 'session.php';
                    if(isset($_SESSION['username']))
                    {
                        ?>
                        <h1 style="text-align:center">Welcome to Web Guru</h1>
                        <div
                            style="text-align:left;border:1px solid tomato;padding:30px;border-radius:5px;border-left:5px solid tomato">
                            <img src="images/user.png"
                                style="width:100px;height:100px;border:3px solid grey;border-radius:100px;padding:5px;" />
                            <?php
                            $sql = "SELECT * FROM users WHERE email='".$_SESSION['username']."'";
                            $users_query = mysqli_query($conn,$sql);
                            if(mysqli_num_rows($users_query)==1){
                                while($row=mysqli_fetch_array($users_query))
                                {
                                    $name=$row['fullname'];
                                    $email=$row['email'];
                                    $fav_language=$row['fav_language'];
                                    $gender=$row['gender'];

                                    // Display user details.
                                    echo
                                    "<p style='float:right;margin-right:15%;margin-top:10%;font-size:25px'><b>$name</b></p>
                                    <p>Email: <b>".$email."</b></p>
                                    <p>Favourite Language: <b>".$fav_language."</b></p>
                                    <p>Gender: <b>".$gender."</b></p>";
                                }
                            }
                            ?>
                            <a href="logout.php" class="loginhere-link"
                                style="float:right;background:tomato;padding:5px;color:white;border-radius:5px;text-decoration:none;margin-top:-10px;margin-right:-20px;">Logout</a>
                        </div>
                        <?php
                    } else{
                        header("Location: login.php");
                    }
                    ?>

                    </div>
                </div>
            </section>

        </div>

    </body>

</html>