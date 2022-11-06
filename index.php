<?php 

    session_start();
    require_once 'menubar.html';
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
    

</head>

<body class="bg">

<section class="body-container">
        <?php
            require 'type_pd.php';
        ?>

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
                    <img src="img/3.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/th.jpg" alt="">
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
            <a href="showProduct.php" target="_blank"  class="bc-show-items" >
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