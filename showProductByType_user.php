<?php 

    session_start();
    require 'error_user.php';
?>

<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show Product</title>
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

    <div class="bc-show">
        <div>
        <div>
            <center><h4>รายการสินค้าทั้งหมด</h4>
                    
        </div>
        
        <?php 
        //ถ้ามีการคลิกเลือกประเภทสินค้า 
        if(isset($_GET['name'])){
            echo '<center><h4 style="color:red"> หมวดสินค้า ' .$_GET['name'] .'</h4></center>';
        }
        //loop
        foreach($result as $row) {  ?>
        
        <center><div class="col-sm-3" style="margin-bottom:50px;">
            <img src="file_pd/<?= $row['product_img'];?>" width="100%"><br>
            <?= $row['product_name'];?> <br>    
            QTY <?= $row['product_qty'];?> ชิ้น <br>
            ราคา  <?= number_format($row['product_price'],2);?>
            บาท  <br>
            
            <?php if($row['product_qty'] > 0){
                echo '<a href="https://m.me/108681001466215" target="_blank" style="width:100%" class="btn btn-success btn-sm">สั่งซื้อ</a>';
            }else{
                echo '<a href="#" style="width:100%" class="btn btn-danger btn-sm disabled" > สินค้าหมด !!</a>';
            }
            ?>
            </div> <!-- //col -->
    
            <?php } ?>
            <br><br>

        </div>
        </div>
    </div></section>

    <?php 
        require 'footer.php';
    ?>
    
</body>
</html>