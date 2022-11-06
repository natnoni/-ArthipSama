<?php
        //เรียกไฟล์เชื่อมต่อฐานข้อมูล
        require_once 'menubar.html';
        require_once 'connect_pd.php';
        if (isset($_GET['type_id']) & isset($_GET['name'])) {
            //คิวรี่ข้อมูลสินค้าตามประเภท
            $stmt = $conn->prepare("SELECT* FROM tbl_product_steam WHERE type_id=?");
            $stmt->execute([$_GET['type_id']]);
            $stmt->execute();
            $result = $stmt->fetchAll();
        }else{
            //คิวรี่ข้อมูลสินค้าทุกรายการ
            $stmt = $conn->prepare("SELECT* FROM tbl_product_steam");
            $stmt->execute();
            $result = $stmt->fetchAll();
        }
            //คิวรี่ข้อมูลประเภทสินค้า
            $stmPrdType = $conn->prepare("SELECT* FROM tbl_product_type");
            $stmPrdType->execute();
            $resultPrdType = $stmPrdType->fetchAll();
 
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

</head>

<body class="bg">
  

  <div class="bc-menu">
          <h3>หมวดหมู่สินค้า</h3>
          <ul>
              <li><?php foreach($resultPrdType as $rowPrdType) 
              {  ?>
            <a href="showProductByType.php?type_id=<?= 
            $rowPrdType['type_id'];?>&name=<?= $rowPrdType['type_name'];?>" 
            class="list-group-item list-group-item-action"> 
            <?= $rowPrdType['type_name'];?></a>
          <?php } ?></a></li>
          </ul>
      </div>
  
</body>
</html>