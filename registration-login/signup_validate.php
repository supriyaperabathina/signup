<?php
require_once 'db_connection.php';
$fullname= $_POST['fullname'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$password= $_POST['password'];
$confirm_password= $_POST['confirm_password'];
$fav_language= $_POST['fav_language'];
if($password==$confirm_password){
    if(strlen($fullname)>0 && strlen($email)>0 && strlen($gender)>0 && strlen($password)>0 
    && strlen($fav_language)>0){
        $select="SELECT * FROM users WHERE email='$email'";
        $getUser = mysqli_query($conn,$select);
        if(mysqli_num_rows($getUser)==1){
            echo "<script>alert('Already registered with this mail');$go_back</script>";
        } else{
            $encrypted = password_hash($password,PASSWORD_BCRYPT);
            $insert = "INSERT INTO users (fullname,email,password,gender,fav_language)
                        VALUES ('$fullname','$email','$encrypted','$gender','$fav_language')";
            $insertUser = mysqli_query($conn,$insert);
            if($insertUser){
                echo "<script>alert('Registered Successfully!');window.location.href='login.php';</script>";
            } else{
                echo "<script>alert('Something went wrong!');$go_back</script>";
            }
        }
    } else{
        echo "<script>alert('Please fill all the mandatory fields');$go_back</script>";
    }
} else{
    echo "<script>alert('Passwords are not matching');$go_back</script>";
}
?>