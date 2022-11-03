<?php 

    require_once 'log_error.php';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
    require_once 'menubar_user.html';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
?>