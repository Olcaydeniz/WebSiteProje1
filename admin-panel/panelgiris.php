<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <form action="panelgiris.php" method="post">
            <div class="title">Login</div>
            <div class="input-box">
                <input type="text" name="usrnm" placeholder="Kullanıcı Adı Giriniz..." required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="password" name="psw" placeholder="Şifrenizi Giriniz..." required>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="submit" value="Giriş Yap">
            </div>
        </form>
    </div>
</body>

</html>

<?php
session_start(); //oturum başlatma
if(isset($_POST["usrnm"], $_POST["psw"])){
    if($_POST["usrnm"]=="admin" && $_POST["psw"]=="12345"){
        $_SESSION["user"]=$_POST["usrnm"];
        header("location:panel.php");
    }
    else{
        echo"<script>alert('Kullanıcı adı veya şifre yanlış.');</script>";
    }
}
?>
