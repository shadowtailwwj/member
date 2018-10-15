<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['username']);
unset($_SESSION['loginid']);
unset($_SESSION['sex']);
header("location:login.html");exit();
?>