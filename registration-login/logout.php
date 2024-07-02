<?php
session_start();
error_reporting(0);
if(isset($_SESSION['username']))
{
    session_unset("username");
    session_destroy();
}
header("Location: login.php");
?>