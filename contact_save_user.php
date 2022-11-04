<?php 

    session_start();
    require 'connect.php';
    require 'menubar_user.html';

      $s_email = $_POST["email"]; 
      $fname = $_POST["firstname"]; 
      $lname = $_POST["lastname"];
      $dinfo = $_POST["detail"];

        $sql = "INSERT INTO contact_info (email,firstname,lastname,detail,date_send)
        VALUES ('$s_email', '$fname', '$lname', '$dinfo', NOW())";

        $result = mysqli_query($con,$sql);

        if($result){
            echo '<center><h3>เราได้บันทึกข้อมูลไว้แล้ว .ขอบคุณครับ</h3></center>';
            echo '<center><a href="contact_user.php">BACK</a></center>';
        }else{
            echo mysqli_error($con);
        }
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

</head>

<body class="bg">


    <a class="btn-top" href="#"> <i class="fa-solid fa-arrow-up"></i> </a>

    <script>
        let popup = document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }

    </script>
</body>

</html>