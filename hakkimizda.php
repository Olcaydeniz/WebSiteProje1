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
            <a href="hakkimizda.php" class="active">Hakkımızda</a>
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








    <!--! about- section start-!-->
    <section class="about">
        <h1 class="heading">about <span>us</span></h1>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam libero pariatur amet aspernatur
                    odit
                    aliquam exercitationem distinctio inventore? Perferendis nesciunt aspernatur eligendi quos corrupti
                    repellendus ipsum sit mollitia, distinctio vero.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam libero pariatur amet aspernatur
                    odit
                    aliquam exercitationem distinctio inventore? Perferendis nesciunt aspernatur eligendi quos corrupti
                    repellendus ipsum sit mollitia, distinctio vero.</p>

            </div>
        </div>
    </section>
    <!--! about section end-!-->






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