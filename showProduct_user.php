<?php 

    session_start();
    require 'error_user.php';
?>

<!DOCTYPE html>

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
    <div class="bc-show">
      <div>
        <div>
           <center><h3>รายการสินค้าทั้งหมด</h3></center>
        </div>
        
        <?php
        //เรียกไฟล์เชื่อมต่อฐานข้อมูล
        require_once 'connect_pd.php';
        //คิวรี่ข้อมูลมาแสดงในตาราง
        $stmt = $conn->prepare("SELECT* FROM tbl_product");
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $row) {
          ?>
           <div class="col-sm-3" style="margin-bottom:50px;">
          <img src="file_pd/<?= $row['product_img'];?>" width="100%"><br>
          <?= $row['product_name'];?> ราคา 
          <?= number_format($row['product_price'],2);?>
           บาท  <br>
           คงเหลือ <?= $row['product_qty'];?> ชิ้น <br>
           <?php if($row['product_qty'] > 0){
            echo '<a href="https://m.me/108681001466215" target="_blank" style="width:100%" class="btn btn-success btn-sm">สั่งซื้อ</a>';
           }else{
            echo '<a href="showProduct.php" style="width:100%" class="btn btn-danger btn-sm disabled" > สินค้าหมด !!</a>';
           }
           ?>
          </div>
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