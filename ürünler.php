<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DENİZ Restaurant </title>
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
            <a href="index.php">Anasayfa</a>
            <a href="hakkimizda.php">Hakkımızda</a>
            <a href="ürünler.php"class="active" >Ürünler</a>
            <a href="iletisim.php">İleşim</a>
        </nav>
        <div class="buttons">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
            <button id="cart-btn">
                <i class="fas fa-shopping-cart"></i>
            </button>
            <button id="menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
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
        <div class="cart-item">
            <i class="fas fa-times"></i>
            <img src="images/menu-3.png" alt="menu">
            <div class="content">
                <h3>Cart item 3</h3>
                <div class="price">15.99TL/-</div>
            </div>
        </div>
        <div class="cart-item">
            <i class="fas fa-times"></i>
            <img src="images/menu-4.png" alt="menu">
            <div class="content">
                <h3>Cart item 4</h3>
                <div class="price">15.99TL/-</div>
            </div>
        </div>
        <a href="#" class="btn">Hemen Satın Al</a>
    </div>
    </header>
    <!--! header section end-!-->




    <!--! menü section start-!-->
    <section class="menu">
        <h1 class="heading">FAVORİ <span>MENÜLER</span></h1>
        <div class="box-container">
            <div class="box">
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

            <div class="box">
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

            <div class="box">
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

            <div class="box">
                <div class="box-head">
                    <img src="images/menu-4.png" alt="menu">
                    <span class="menu-category">Burger</span>
                    <h3>3 Köfte Burger</h3>
                    <div class="price">79.90TL <span>99.90TL</span></div>
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
        <h1 class="heading">MENÜ<span>LER</span></h1>
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

            <div class="box  dark-bg    ">
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
            <div class="box  ">
                <div class="box-head">
                    <span class="title">Mini Burger</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="products">
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
            <div class="box ">
                <div class="box-head">
                    <span class="title">Mini Burger</span>
                    <a href="#" class="name">Bacon Burger</a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="products">
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