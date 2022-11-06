<?php 

    require_once 'log_error.php';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
    require_once 'menubar_user.html';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
    require_once 'type_pd_user.php';
    if (!isset($_SESSION['userid'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form class="navbar-form navbar-right" action="searchresults.php" method="GET">
        <div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
      </form>

      <style>
        .bg {
            background-color: #FFFAF0;
        }

        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

nav {
    width: 100%;
    height: 100px;
    background: #003399;

}

.nav-container {
    max-width: 1000px;
    height: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-title {
    font-size: 2rem;
    color: aliceblue;
    cursor: pointer;
}

.nav-search {
    width: 600px;
    height: 40px;
    position: relative;
}

.nav-txt-search {
    width: 100%;
    height: 100%;
    border: none;
    outline: none;
    padding: 10px;
}

.nav-btn-search {
    position: absolute;
    top: 3px;
    right: 3px;
    width: 60px;
    height: 34px;
    background: #0066FF;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    cursor: pointer;
}


.nav-user {
    font-size: 2rem;
    color: #fff;
    cursor: pointer;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

:root {
    --orange: #F85130;
}

var {
    width: 100%;
    height: auto;
    padding: 10px;
    background: var(--orange);

    display: flex;
    justify-content: center;
}

.var-top {
    display: flex;
    justify-content: space-between;
    align-items: center;

    width: 100%;
}

.var-top-container {
    display: flex;
}

.var-top-container li {
    list-style: none;
}

.var-top-container li a {
    text-decoration: none;
    padding: 10px 20px;
    color: #fff;
    font-size: 13px;
}

.affix {
    top: 0;
    width: 100%;
    z-index: 9999;
}

.affix+.container-fluid {
    padding-top: 70px;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
}

.btn-top {
    position: fixed;
    width: 50px;
    background: #27ae60;
    bottom: 40px;
    right: 50px;

    text-decoration: none;
    text-align: center;
    line-height: 50px;
    color: white;
}

.body-container {
    display: flex;
    max-width: 1200px;
    height: auto;
    padding: 10px;
    margin: 0 auto;
}

.bc-menu {
    width: 20%;
}

.bc-menu>h3 {
    font-weight: 500;
}

.bc-menu ul li {
    list-style: none;
}

.bc-menu ul li a {
    display: flex;
    text-decoration: none;
    padding: 10px 20px;
    border: 1px solid #e5e5e5;
    color: #333;
    cursor: pointer;
    transition: .3s ease;
}

.bc-menu ul li a:hover {
    background: #f7f7f7;
    color: var(--orange);
}

.bc-menu ul li:first-child a {
    border-top: 3px solid var(--orange);
}

/* slidershow */

  .slider{
    width: 800px;
    height: 500px;
    border-radius: 10px;
    overflow: hidden;
    margin: 50px;
  }
  
  .slides{
    width: 500%;
    height: 500px;
    display: flex;
  }
  
  .slides input{
    display: none;
  }
  
  .slide{
    width: 20%;
    transition: 2s;
  }
  
  .slide img{
    width: 800px;
    height: 500px;
  }
  
  /*css for manual slide navigation*/
  
  .navigation-manual{
    position: absolute;
    width: 800px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
  }
  
  .manual-btn{
    border: 2px solid #fff;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }
  
  .manual-btn:not(:last-child){
    margin-right: 40px;
  }
  
  .manual-btn:hover{
    background: #40D3DC;
  }
  
  #radio1:checked ~ .first{
    margin-left: 0;
  }
  
  #radio2:checked ~ .first{
    margin-left: -20%;
  }
  
  #radio3:checked ~ .first{
    margin-left: -40%;
  }
  
  #radio4:checked ~ .first{
    margin-left: -60%;
  }
  
  /*css for automatic navigation*/
  
  .navigation-auto{
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;
  }
  
  .navigation-auto div{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
  }
  
  .navigation-auto div:not(:last-child){
    margin-right: 40px;
  }
  
  #radio1:checked ~ .navigation-auto .auto-btn1{
    background: #40D3DC;
  }
  
  #radio2:checked ~ .navigation-auto .auto-btn2{
    background: #40D3DC;
  }
  
  #radio3:checked ~ .navigation-auto .auto-btn3{
    background: #40D3DC;
  }
  
  #radio4:checked ~ .navigation-auto .auto-btn4{
    background: #40D3DC;
  }



footer {
    position: absolute;
    background: #f85130;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    padding: 10px 12;
}

.footer-content h3 {
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
}

.footer-content p {
    max-width: 800px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}

.socials {

    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}

.socials li {
    margin: 0 10px;
}

.socials a {
    text-decoration: none;
    color: #fff;
}

.socials a i {
    font-size: 1.1rem;
    transition: color .4s ease;
}

.socials a:hover i {
    color: aqua;
}

.footer-bottom {
    background: #000;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}

.footer-bottom p {
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}

.footer-bottom span {
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}

div.figure {
    float: left;
    width: 25%;
    margin: 0.5em;
    padding: 0.5em;
}

div.figure p {

    text-align: center;
    font-style: italic;
    font-size: smaller;
    text-indent: 0;
}

img.scaled1 {
    width: 30%;
}

img.scaled2 {
    width: 70%;
}


    </style>
</head>
<body>
    
</body>
</html>