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
              <li><?php foreach($resultPrdType as $rowPrdType) 
              {  ?>
            <a href="showProductByType_user.php?type_id=<?= 
            $rowPrdType['type_id'];?>&name=<?= $rowPrdType['type_name'];?>" 
            class="list-group-item list-group-item-action"> 
            <?= $rowPrdType['type_name'];?></a>
          <?php } ?></a></li>
          </ul>
      </div>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--image slider start-->
        <center><div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                    <img src="img/1.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/2.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/3.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/4.png" alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        <!--image slider end-->

        <script type="text/javascript">
            var counter = 1;
            setInterval(function () {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 4) {
                    counter = 1;
                }
            }, 3000);
        </script>

    </section>

    <center>
    <br><p style="font-size: 30px;">สินค้าแนะนำ</p>
    <section>
    <div class="bc-show">
            <a href="showProductByType_user.php" target="_blank"  class="bc-show-items" >
                <div class="bc-show-items-img">
                    <img src="file_pd/1.png">
                </div>
                <br><p>[ ขายดี #1 ]</p>
                <h5> SteamWallet THB </h5>
            </a>
    </section>
</center><br>

    <?php 
        require 'footer.php';
    ?>
    
</body>

</html>