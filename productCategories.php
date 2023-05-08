<?php
if (isset($_GET["add"])) {
    $proCode = $_GET["add"];
    $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
    $find = "select * from product where proCode ='$proCode'";
    $rs = mysqli_query($link, $find);
    $row = mysqli_fetch_array($rs);
    $proAmount = $row['proAmount'];
    $proPicture = $row['proPicture'];
    $proName = $row['proName'];
    $proInfo = $row['proInfo'];
    $proPrice = $row['proPrice'];
    $proSeller = $row['proSeller'];
    $proTag = $row['proTag'];

    $sql = "INSERT INTO cart (proCode, proName, proAmount, proPicture, proTag, proInfo, proPrice, proSeller) VALUES ('$proCode','$proName','$proAmount','$proPicture','$proTag','$proInfo','$proPrice','$proSeller')";
    if ($rs_insert = mysqli_query($link, $sql)) { ?>
<script>
alert("加入購物車");
</script>
<?php
    } else {
    ?>
<script>
alert("無法加入購物車");
</script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Foodcrate</title>
    <link rel="icon" href="img/smile.png" />
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
<style>
.section_padding {
    padding-bottom: 0px;
}

.section_padding1 {
    padding-bottom: 50px;
}
</style>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/smile.png" alt="logo" height="80px" />foodcrate
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        產品
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="productList.php">
                                            產品列表</a>
                                        <a class="dropdown-item" href="single-product.html">產品細項</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        其他
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <?php
                                        if (empty($_SESSION['level'])) {
                                        ?>
                                        <a class="dropdown-item" href="userLogin.php"> 登入 </a>
                                        <?php }?>>
                                        <a class="dropdown-item" href="checkout.html">下單</a>
                                        <a class="dropdown-item" href="cart.php">購物車</a>
                                        <a class="dropdown-item" href="confirmation.html">確認訂單</a>
                                        <?php
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                                        ?>
                                        <a class="dropdown-item" href="userCenter.php">使用者中心</a>
                                        <?php }
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                                        ?>
                                        <a class="dropdown-item" href="sellercenter.php">商家中心</a>
                                        <?php } ?>
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
                            <a class=dropdown-item>
                                <?php
                                if (isset($_SESSION['userName'])) {
                                    echo $_SESSION['userName']; ?>

                                <a class="dropdown-item" href="./function/logOut.php">登出</a>
                                <?php
                                } else if (isset($_SESSION['sellerName'])) {
                                ?>
                                <?php echo $_SESSION['sellerName']; ?>

                                <a class="dropdown-item" href="./function/logOut.php">登出</a>
                                <?php } ?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>產品列表</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <?php
    $label = $_GET["proTag"];
    $link = mysqli_connect("localhost", "root", "12345678", "sa");
    $sql = "select * from product where proTag='$label'";
    $rs = mysqli_query($link, $sql);
    ?>
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="搜尋" />
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">
                                    類別 <i class="right fas fa-caret-down"></i>
                                </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#"></a></p>
                                    <p><a href="productCategories.php?proTag=台式">台式</a></p>
                                    <p><a href="productCategories.php?proTag=西式">西式</a></p>
                                    <p><a href="productCategories.php?proTag=歐式">歐式</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <?php
                            while ($product = mysqli_fetch_array($rs)) {
                            ?>
                            <div class="col-lg-6 col-sm-6">
                                <form method="get" action="productList.php">
                                    <div class="single_product_item">
                                        <img src="<?php echo $product["proPicture"] ?>" alt="#" class="img-fluid" />
                                        <h3>
                                            <a href="single-product.html">
                                                <?php echo $product['proName'] ?>
                                            </a>
                                        </h3>
                                        <p>$<?php echo $product['proPrice'] ?></p>
                                        <p>店家: <?php echo $product['proSeller'] ?></p>
                                        <form method="get" action="productCategories.php">
                                            <button name="add" value="<?php echo $product['proCode'] ?>"
                                                class="icon_plus butt">
                                            </button>
                                        </form>
                                    </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">更多商品</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- client review part here -->

    <!-- client review part end -->

    <!-- feature part here -->
    <section class="feature_part section_padding1">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="img/icon/feature_icon_1.svg" alt="#" />
                    <h4>不提供信用卡</h4>
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
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
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