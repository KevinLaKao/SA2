<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "select * from news";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>foodcrate</title>
    <link rel="icon" href="img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/newLogo.png" alt="logo" style="height: 80px" />
                            foodcrate
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">首頁</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">關於我們</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        產品
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="productList.php">
                                            產品列表</a>
                                        <a class="dropdown-item" href="single-product.html">產品細項</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        其他
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="userLogin.php"> 登入 </a>
                                        <a class="dropdown-item" href="checkout.html">下單</a>
                                        <a class="dropdown-item" href="cart.php">購物車</a>
                                        <a class="dropdown-item" href="confirmation.html">歷史訂單</a>
                                        <a class="dropdown-item" href="member.html">使用者中心</a>
                                        <a class="dropdown-item" href="sellercenter.html">商家中心</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">聯絡我們</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="userLogin.php"><i class="ti-user"></i></a>
                            <a href="cart.php">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <a>
                                <?php
                                if (isset($_SESSION['userName'])) {
                                    echo $_SESSION['userName'];
                                }
                                ?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part" style="height: 600px; justify-content: center;">
        <div class="banner_img" style="position: relative; max-width:70%;">
            <img src="img/步驟.jpg" alt="#" class="img-fluid" />
        </div>
    </section>
    <!-- banner part start-->

    <!-- trending item start-->
    <section class="trending_items" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>熱銷商品</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <div class="single_product_item_thumb">
                            <img src="img/s1.jpg" alt="#" class="img-fluid" />
                        </div>
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/s2.jpg" alt="#" class="img-fluid" />
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/s3.jpg" alt="#" class="img-fluid" />
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/s4.jpg" alt="#" class="img-fluid" />
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/s5.jpg" alt="#" class="img-fluid" />
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img src="img/s6.jpg" alt="#" class="img-fluid" />
                        <h3>
                            <a href="single-product.html">義大利麵</a>
                        </h3>
                        <p>$50</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending item end-->

    <!-- client review part here -->
    <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="single_client_review">
                                <p><?php echo $row['newsTitle']; ?></p>
                                <p><?php echo $row['newsContent']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client review part end -->

    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#" />
                        <h4>不支援信用卡</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#" />
                        <h4>線上訂購</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#" />
                        <h4>自取商品</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#" />
                        <h4>額外優惠</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>訂閱取得消息!</h2>
                        <p>輸入電子信箱以獲得新消息</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="輸入你的信箱" />
                            <a href="#" class="btn_1">訂閱</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | This template is made with
                                <i class="ti-heart" aria-hidden="true"></i> by
                                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                            <div class="social_icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>