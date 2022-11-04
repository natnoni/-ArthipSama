<?php
    require('connect.php');

    $s_pd = $_POST["s_pd"];

    $sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%$s_pd%' ORDER BY product_name ASC";
    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            

</body>
</html>