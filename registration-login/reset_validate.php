<?php
require_once 'db_connection.php';
$email= $_POST['email'];
$password= $_POST['new_password'];
$confirm_password= $_POST['confirm_new_password'];
if($password==$confirm_password){
    if(strlen($email)>0 && strlen($password)>0){
        $select="SELECT * FROM users WHERE email='$email'";
        $getUser = mysqli_query($conn,$select);
        if(mysqli_num_rows($getUser)==1){
            $encrypted = password_hash($password,PASSWORD_BCRYPT);
            $update = "UPDATE users SET password='$encrypted' WHERE email='$email'";
            $updateUser = mysqli_query($conn,$update);
            if($updateUser){
                echo "<script>alert('Reset Password Successfully!');window.location.href='login.php';</script>";
            } else{
                echo "<script>alert('Reset Password Failed!');$go_back</script>";
            }
        } else{
            echo "<script>alert('User not found');$go_back</script>";
        }
    } else{
        echo "<script>alert('Please fill all the mandatory fields');$go_back</script>";
    }
} else{
    echo "<script>alert('Passwords are not matching');$go_back</script>";
}
?>