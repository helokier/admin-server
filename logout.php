<?php
session_start();
include('config/db.php');
    unset($_SESSION['name']);
    session_destroy();
    header("Location: login.php");
?>
