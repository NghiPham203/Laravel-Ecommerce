<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php 
 if($titlepage!="") echo $titlepage;

    else echo"Commission";
    ?>
    </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=PROURL?>/public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=PROURL?>/public/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="<?=PROURL?>/public/img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="<?=PROURL?>/public/img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Giỏ hàng : <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="<?=PROURL?>"><img src="<?=PROURL?>/public/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>

                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li><a href="<?=PROURL?>">Đăng Nhập</a>
                                    <li><a href="<?=PROURL?>">Đăng Ký</a>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="<?=PROURL?>/public/img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">

                                </div>
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="<?=PROURL?>/public/img/icon/cart.png" alt="">
                                        <span>0</span></a>
                                    <div class="cart__price">Giỏ hàng: <span>$0.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="<?=PROURL?>/">Trang Chủ</a></li>
                            <li><a href="<?= PROURL ?>/product">Sản Phẩm</a></li>

                            <li><a href="<?=PROURL?>">Trang Thông Tin</a></li>

                            <!-- <li><a href="#">###</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./wisslist.html">Wisslist</a></li>
                                    <li><a href="./Class.html">Class</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?=PROURL?>">Bài Viết</a></li>
                            <li><a href="<?=PROURL?>">Liên Hệ</a></li>
                            <li>
                                <form action="search.php" method="post">
                                    <input name="kyw" placeholder="  Tìm kiếm...">
                                    <button class="btn " type="submit" name="btnsearch"><i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

</body>

</html>