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
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="bg">
    

<section class="body-container">
        <div class="bc-menu">
            <h3>หมวดหมู่สินค้า</h3>
            <ul>
                <li><a href="showProduct.php">บัตรเติมเงิน/บัตรเติมเกม</a></li>
                <li><a href="showProduct.php">คีย์เกม/ไอเทมในเกม</a></li>
                <li><a href="showProduct.php">ไอดีเกม มือถือ/PC</a></li>
                <li><a href="showProduct.php">โปรแกรม</a></li>
            </ul>
        </div>

        <div class="slidershow middle">
<div class="slides">
    <input type="radio" name="r" id="r1" checked>
    <input type="radio" name="r" id="r2">
    <input type="radio" name="r" id="r3">
    <input type="radio" name="r" id="r4">
    <div class="slide s1">
        <img src="img/1.png" alt="">
    </div>
    <div class="slide">
        <img src="img/2.png" alt="">
    </div>
    <div class="slide">
        <img src="img/th.jpg" alt="">
    </div>
    <div class="slide">
        <img src="img/4.png" alt="">
    </div>
</div>

<div class="navigation">
    <label for="r1" class="bar"></label>
    <label for="r2" class="bar"></label>
    <label for="r3" class="bar"></label>
    <label for="r4" class="bar"></label>
</div>
</div>

    </section>

    <center>
    <br><br><br><br><br><br><br><br><br><br><br><p style="font-size: 30px;">สินค้าแนะนำ</p>
    <section>
    <div class="bc-show">
            <a href="showProduct_user.php" target="_blank"  class="bc-show-items" >
                <div class="bc-show-items-img">
                    <img src="file_pd/1.png">
                </div>
                <br><p>[ ขายดี #1 ]</p>
                <h5> SteamWallet THB </h5>
            </a>
    </section>
</center>

    <?php 
        require 'footer.php';
    ?>
    
</body>

</html>