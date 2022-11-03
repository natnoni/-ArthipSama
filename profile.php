<?php 

  session_start();
  require 'connect.php';
  require 'functions.php';
  require 'menubar_user.html';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <form class="navbar-form navbar-right" action="searchresults.php" method="GET">
        <div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
      </form>
    
</head>
<center><body class="bg">

    <br><div class="container">
      <strong class="title">My Profile</strong>
    </div>
    
    
    <div class="profile-box box-left">

      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM users_info WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><strong>Email:</strong> <span>".$row['email']."</span></div>";
          echo "<div class='info'><strong>FirstName:</strong> <span>".$row['firstname']."</span></div>";
          echo "<div class='info'><strong>LastName:</strong> <span>".$row['lastname']."</span></div>";

          $query_date = "SELECT DATE_FORMAT(date_joined, '%d/%m/%Y') FROM users_info WHERE id = '".$_SESSION['userid']."'";
          $result = mysqli_query($con, $query_date);

          $row = mysqli_fetch_row($result);
          echo "<div class='form-group'><strong>_______________________________________________________________________________________________</strong></div>";
          echo "<div class='form-group'><strong>Date Joined:</strong> <span>".$row[0]."</span></div>";
          
        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
      </div>

      
    </div><br><br><br><br><br><br><br><br><br>

  </section></center>

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
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:login.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>