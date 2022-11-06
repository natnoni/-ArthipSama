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
    require_once 'type_pd_user.php';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form class="navbar-form navbar-right" action="searchresults.php" method="GET">
        <div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
      </form>
</head>
<body>
    
</body>
</html>