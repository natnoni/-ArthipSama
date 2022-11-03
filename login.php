<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['login'])) {

    $uname = clean($_POST['username']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM users_info WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['userid'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header("location:index_user.php");
      exit;

    } else {

      $_SESSION['errprompt'] = "Wrong username or password.";

    }

  }

  if(!isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login - Steam Sama</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .bg {
            background-color: #FFFAF0;
        }
    </style>
    
</head>
<?php include 'menubar.html'; ?>
<body class="bg">


  <section class="center-text">
    
    <strong>Log In</strong>

    <div class="login-form box-center">
      <?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
        }

      ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <div class="form-group">
          <label for="username" class="sr-only">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
          <label for="password" class="sr-only">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        
        <a href="register.php">Need an account?</a>
        <input class="btn btn-primary" type="submit" name="login" value="Log In">

      </form>
    </div> <br><br><br><br><br><br><br><br>

  </section>

  <footer>
        
        <div class="footer-content">
            <h3>code game sama</h3>
            <p>ขอบคุณสำหรับการสั่งซื้อ เราจะปรับปรุงให้ดียิ่งขึ้นไปอีก 
                ก่อนจากกันไปอย่าลืมฝากติดตามและข่าวสารผ่าน<br>Fanpage : Arthip Sama Shop - รับเติมเกม Steam ราคาถูก   <br>ด้วยนะครับ ขอบคุณคร้าบบบ</p>
            
            <ul class="socials">
                <li> <a href="https://www.facebook.com/ArthipSamaS/"target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="https://twitter.com/samakung9"target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="https://www.youtube.com/channel/UCHI7jBF3zWhBK_Z14hEyLAA"target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li> <a href="https://discord.gg/RWQEZSFDVr"target="_blank"><i class="fa fa-comments-o"></i></a></li>
                <li> <a href="" onclick="alert('098-712-9295')"><i class="fa fa-mobile"></i></a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>copyright &copy;2022 codeArthipSama. designed by <span>ArthipSama</span></p>
        </div>
    </footer>

    <a class="btn-top" href="#"> <i class="fa-solid fa-arrow-up"></i> </a>

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php

  } else {
    header("location:index_user.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($con);

?>