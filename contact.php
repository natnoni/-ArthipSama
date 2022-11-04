<?php 

    require 'menubar.html';
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

    <form action="conntact_save.php" method="POST">
    <section class="body-container">
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Contact Us</h2>
                    <input type="text" class="field" name="email" placeholder="Your Email">
                    <input type="text" class="field" name="firstname" placeholder="Your Firstname">
                    <input type="text" class="field" name="lastname" placeholder="Your Lastname">
                    <textarea placeholder="Message" name="detail" class="field" ></textarea>
                    <button class="btn" onclick="openPopup()">Send</button>
                    <div class="popup" id="popup">
                        <img src="img/tick.png">
                        <h2>Thank You!</h2>
                        <p>ข้อมูลคุณได้รับการบันทึกเรียบร้อยแล้ว. ขอบคุณครับ!</p>
                        <a href="index.php">
                        <button type="button" onclick="closePopup()">OK</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section></form>
    <br><br><br><br>

    <?php 
        require 'footer.php';
    ?>
    
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