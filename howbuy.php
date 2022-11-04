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
        <div class="bc-menu">
            <h3>หมวดหมู่สินค้า</h3>
            <ul>
                <li><a href="showProduct.php">บัตรเติมเงิน/บัตรเติมเกม</a></li>
                <li><a href="showProduct.php">คีย์เกม/ไอเทมในเกม</a></li>
                <li><a href="showProduct.php">ไอดีเกม มือถือ/PC</a></li>
                <li><a href="showProduct.php">โปรแกรม</a></li>
            </ul>
        </div>
        <div class="bc-show-payment">
            <img src="img/ปกวิธีซื้อ.png" width="600" </br>_________________________________________________________________________________________________
            <img src="img/ขั้นตอน.png" width="600"/>
        </div>
    </section>

    <?php 
        require 'footer.php';
    ?>
    
</body>

</html>