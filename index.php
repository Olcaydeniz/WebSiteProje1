<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DENİZ Burger </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--! header section start-!-->
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="logo">
        </a>
        <nav class="navbar">
            <a href="index.php"class="active">Anasayfa</a>
            <a href="hakkimizda.php">Hakkımızda</a>
            <a href="ürünler.php" >Ürünler</a>
            <a href="iletisim.php">İleşim</a>
        </nav>
        <div class="buttons">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
            <button id="cart-btn">
                <i class="fas fa-shopping-cart"></i>
            </button>
        <div class="search-form">
            <input type="text" class="search-input" id="search-box" placeholder="search here">
        </div>
    <div class="cart-items-container  ">
        <div class="cart-item">
            <i class="fas fa-times"></i>
            <img src="images/menu-1.png" alt="menu">
            <div class="content">
                <h3>Cart item 1</h3>
                <div class="price">15.99TL/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-times"></i>
            <img src="images/menu-2.png" alt="menu">
            <div class="content">
                <h3>Cart item 2</h3>
                <div class="price">15.99TL/-</div>
            </div>
        </div>
        <a href="#" class="btn">Hemen Satın Al</a>
    </div>
    </header>
    <!--! header section end-!-->



    <!--! home section start-!-->
    <section class="home">
        <div class="content">
            <h3> HEMEN EVE TESLİMAT</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ipsam fugiat ipsa corporis exercitationem
                commodi
                officia quidem rem praesentium optio, necessitatibus deserunt, illo repudiandae eaque distinctio quasi.
                Ea,
                odio
                excepturi.</p>
            <a href="#" class="btn">Hemen Şimdi</a>
        </div>

    </section>
    <!--! home section end-!-->
    <!--! menü section start-!-->
    <section class="menu">
        <h1 class="heading">DİĞER<span>MENÜLER</span></h1>
        <div class="box-container">

            <div class="box ">
                <div class="box-head">
                    <img src="images/menu-1.png" alt="menu">
                    <span class="menu-category">PİZZA</span>
                    <h3>6 Mini Pizza</h3>
                    <div class="price">104.90TL <span>119.99TL</span></div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">Sipariş Ver</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-head">
                    <img src="images/menu-2.png" alt="menu">
                    <span class="menu-category">Burger</span>
                    <h3>5 Mini Burger</h3>
                    <div class="price">99.90TL <span>134.99TL</span></div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">Sipariş Ver</a>
                </div>
            </div>
            <div class="box ">
                <div class="box-head">
                    <img src="images/menu-2.png" alt="menu">
                    <span class="menu-category">Burger</span>
                    <h3>5 Mini Burger</h3>
                    <div class="price">99.90TL <span>134.99TL</span></div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">Sipariş Ver</a>
                </div>
            </div>

            <div class="box ">
                <div class="box-head">
                    <img src="images/menu-3.png" alt="menu">
                    <span class="menu-category">PİZZA</span>
                    <h3>2 Karışık Pizza</h3>
                    <div class="price">49.99TL <span>59.99TL</span></div>
                </div>
                <div class="box-bottom">
                    <a href="#" class="btn">Sipariş Ver</a>
                </div>
            </div>
        </div>
    </section>
    <!--! menü section end-!-->

    <!--! products section start-!-->
    <section class="products">
        <h1 class="heading">DİĞER<span>ÜRÜNLER</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="box-head">
                    <span class="title">Mini Burger</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="products">
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">35TL</b>
                        <span class="amount">110gr / 300Cal</span>
                    </div>
                    <div class="products-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-head">
                    <span class="title">Mini Burger</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="products">
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">45TL</b>
                        <span class="amount">110gr / 300Cal</span>
                    </div>
                    <div class="products-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box dark-bg">
                <div class="box-head">
                    <span class="title">Mini Burger</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/dark-product.jpg" alt="products">
                </div>
                <div class="box-bottom">
                    <div class="info">
                        <b class="price">55TL</b>
                        <span class="amount">110gr / 300Cal</span>
                    </div>
                    <div class="products-btn">
                        <a href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! products section end-!-->

    <!--! about- section start-!-->
    <section class="about">
        <h1 class="heading">HAKKIMIZ<span>DA</span></h1>
        <div class="row">
            <div class="image">
                <img src="images/about.jpg" alt="about">
            </div>
            <div class="content">
                <h3>Burgerlerimizin gizli tarifi nedir?</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam libero pariatur amet aspernatur
                    odit
                    aliquam exercitationem distinctio inventore? Perferendis nesciunt aspernatur eligendi quos corrupti
                    repellendus ipsum sit mollitia, distinctio vero.</p>
                <a href="hakkimizda.php" class="btn">daha fazla bilgi edin..</a>
            </div>
        </div>
    </section>
    <!--! about section end-!-->

    <!--! contact us section start-!-->
    <section class="contact" id="contact">
        <h1 class="heading">BİZE <span>ULAŞIN</span></h1>
        <div class="row">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203937.2107101759!2d35.288067!3d36.997415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f38a79c7193%3A0xd61674d8580bea06!2sAdana%2C%20Re%C5%9Fatbey%2C%20Seyhan%2FAdana!5e0!3m2!1str!2str!4v1687167665129!5m2!1str!2str"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <form action="index.php" method="post">
                <h3>TEMASTA OLUN</h3>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Ad Soyad" name="adsoyad">
                </div>
                <div class="inputBox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="inputBox">
                    <i class="fas fa-phone"></i>
                    <input type="number" placeholder="Telefon" name="tel">
                </div>
                <div class="inputBox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Konu Başlığı" name="baslık">
                </div>
                <textarea name="mesaj" class="inputBox" id="" cols="100" rows="10"
                    placeholder="Dilek ve Görüşleriniz."></textarea>
                <input type="submit" class="btn" value="Şimdi İletşimi Geç">
            </form>
        </div>
    </section>
    <!--! contact section end-!-->
    <!--! footer section start-!-->
    <section class="footer">
        <div class="search">
            <input type="text" class="search-input" placeholder="Search">
            <button class="btn btn-primary"> Arama</button>
        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook">
            </a>
            <a href="#" class="fab fa-instagram">
            </a>
            <a href="#" class="fab fa-whatsapp">
            </a>
            <a href="#" class="fab fa-twitter">
            </a>
        </div>
        <div class="links">
        <a href="index.php">Anasayfa</a>
            <a href="hakkimizda.php">Hakkımızda</a>
            <a href="ürünler.php" >Ürünler</a>
            <a href="iletisim.php" >İleşim</a>
        </div>
        <div class="credit">
            Tasırım Sahibi <span>Olcay DENİZ</span> | Tüm Haklar Saklıdır.
        </div>
    </section>
    <!--! footer section end-!-->
    <script src="js/script.js"></script>
</body>

</html>

<?php 
include("admin-panel/baglanti.php");
if(isset($_POST["adsoyad"],  $_POST["tel"], $_POST["email"],
 $_POST["baslık"],$_POST["mesaj"],)){
    $adsoyad=$_POST["adsoyad"];
    $tel=$_POST["tel"];
    $email=$_POST["email"];
    $baslık=$_POST["baslık"];
    $mesaj=$_POST["mesaj"];

    $ekle= "INSERT INTO iletisim(adsoyad,telefon,email,konu,mesaj)
    VALUES ('".$adsoyad."','".$tel."','".$email."','".$baslık."','".$mesaj."')";
    if($baglan->query(($ekle))===TRUE){
        echo"<script>alert('Dilek ve görüşünüz başarıyla iletilmiştir.');</script>";
    }
    else{
        echo"<script>alert('Eksik alan,Lütfen boş alanları doldurunuz.');</script>";
    }
}
?>