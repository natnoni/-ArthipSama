<?php 

    session_start();
    require 'error_user.php';
?>

<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

    <form class="navbar-form navbar-right" action="searchresults.php" method="GET">
        <div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
      </form>

</head>

<body class="bg">

<form action="contact_save_user.php" method="POST">
    <section class="body-container">
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Contact Us</h2>
                    <input type="text" class="field" name="email" placeholder="Your Email">
                    <input type="text" class="field" name="firstname" placeholder="Your Firstname">
                    <input type="text" class="field" name="lastname" placeholder="Your Lastname">
                    <textarea placeholder="Message" name="detail" class="field" ></textarea>
                    <button class="btn" onclick="openPopup()">Send</button>
                    <div class="popup" id="popup">
                        <img src="img/tick.png">
                        <h2>Thank You!</h2>
                        <p>ข้อมูลคุณได้รับการบันทึกเรียบร้อยแล้ว. ขอบคุณครับ!</p>
                        <a href="index.php">
                        <button type="button" onclick="closePopup()">OK</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section></form>



    <footer>

        <div class="footer-content">
            <h3>code game sama</h3>
            <p>ขอบคุณสำหรับการสั่งซื้อ เราจะปรับปรุงให้ดียิ่งขึ้นไปอีก
                ก่อนจากกันไปอย่าลืมฝากติดตามและข่าวสารผ่าน<br>Fanpage : Arthip Sama Shop - รับเติมเกม Steam ราคาถูก
                <br>ด้วยนะครับ ขอบคุณคร้าบบบ
            </p>

            <ul class="socials">
                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
                <li> <a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>copyright &copy;2022 codeArthipSama. designed by <span>ArthipSama</span></p>
        </div>
    </footer>

    <a class="btn-top" href="#"> <i class="fa-solid fa-arrow-up"></i> </a>
</body>

</html>