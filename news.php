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
    <link rel="stylesheet" type="text/css" href="news_css.css">

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


        <div class="bc-show">
            <a href="https://www.beartai.com/review/games/912461" target="_blank"  class="bc-show-items" >
                <div class="bc-show-items-img">
                    <img src="img/godofwar.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>God of War</h5>
            </a>

            <a href="https://www.gamefever.co/%E0%B8%A3%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%A7-Dying-Light-2-Stay-Human" target="_blank"  class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Dying Light 2 Stay Human.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>Dying Light 2 Stay Human</h5>
            </a>

            <a href="https://www.gamingdose.com/review/elden-ring/" target="_blank"  class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/ELDEN RING.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>ELDEN RING</h5>
            </a>

            <a href="https://www.4gamers.co.th/news/detail/3232/party-animals-heartrocker-hrk-review-games-free-demo-on-steam-download" target="_blank"  class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Party Animals.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>Party Animals</h5>
            </a>

            <a href="https://www.beartai.com/news/game-news/1076115" target="_blank"  class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Hollow Knight.jpg">
                </div>
                <p>[News] เกมใหม่</p>
                <h5>Hollow Knight: Silksong</h5>
            </a>

            <a href="https://www.compgamer.com/mainpage/166728" target="_blank"  class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/The King of Fighters XV.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>The King of Fighters XV</h5>
            </a>
        </div>
    </section>

    <?php 
        require 'footer.php';
    ?>
    
</body>

</html>