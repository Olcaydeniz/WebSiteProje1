<?php
$sunucu="localhost";
$kullanici="root";
$parola="";
$vt="deniz";
$baglan=mysqli_connect($sunucu,$kullanici,$parola , $vt);

if(!$baglan){
die("Veritabanı bağlantı işlemi başarısız.".mysqli_connect_error());
}

?>