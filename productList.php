<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Foodcrate</title>
    <link rel="icon" href="img/foodcrate.png" />
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
    <?php include("header.php");?>
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
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="productList.php">
                                <input type="text" name="findProduct" placeholder="關鍵字搜尋所有產品" />
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">
                                    <?php
                                    if (isset($_GET['sellerName'])) {
                                        $sellerName = $_GET['sellerName'];
                                    }
                                    if (isset($_GET['Categories']) && empty($sellerName)) {
                                        $Categories = $_GET['Categories'];
                                        echo "依所有商品分類"; ?>
                                        <i class="right fas fa-caret-down"></i>
                                </div>
                                <div class="select_option_dropdown">
                                    <p><a href="productList.php?Categories=生鮮">生鮮</a>
                                    </p>
                                    <p><a href="productList.php?Categories=雜糧">雜糧</a>
                                    </p>
                                    <p><a href="productList.php?Categories=蔬果">蔬果</a>
                                    </p>
                                <?php } else if (isset($sellerName)) {
                                        echo "依此店家產品類別";
                                ?>
                                    <i class="right fas fa-caret-down"></i>
                                </div>
                                <div class="select_option_dropdown">
                                    <p><a href="productList.php?sellerName=<?php echo $sellerName; ?>">全部</a></p>
                                    <p><a href="productList.php?Categories=生鮮&sellerName=<?php echo $sellerName; ?>">生鮮</a>
                                    </p>
                                    <p><a href="productList.php?Categories=雜糧&sellerName=<?php echo $sellerName; ?>">雜糧</a>
                                    </p>
                                    <p><a href="productList.php?Categories=蔬果&sellerName=<?php echo $sellerName; ?>">蔬果</a>
                                    </p>
                                <?php } else {
                                        echo "依所有商品分類";
                                ?>
                                    <i class="right fas fa-caret-down"></i>
                                </div>
                                <div class="select_option_dropdown">
                                    <p><a href="productList.php?Categories=生鮮">生鮮</a>
                                    </p>
                                    <p><a href="productList.php?Categories=雜糧">雜糧</a>
                                    </p>
                                    <p><a href="productList.php?Categories=蔬果">蔬果</a>
                                    </p>
                                    <i class="right fas fa-caret-down"></i>
                                <?php }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <?php
                            if (isset($_GET['findProduct'])) {
                                $findProduct = $_GET['findProduct'];
                                $link = mysqli_connect("localhost", "root", '', "sa");
                                $sql = "SELECT * FROM product WHERE productName Like '%$findProduct%'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) {
                            ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?php echo $product["productPicture"] ?>" alt="#" class="img-fluid" />
                                            <h3>
                                                <a href="single-product.html">
                                                    <?php echo $product['productName'] ?>
                                                </a>
                                            </h3>
                                            <p>$<?php echo $product['productPrice'] ?></p>
                                            <p>店家: <?php echo $product['sellerName'] ?></p>
                                            <form method="get" action="./function/addProductToCart.php">
                                                <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                <input type="hidden" name="userEmail" value="<?php if (isset($_SESSION['userEmail'])) {
                                                                                                    echo $_SESSION['userEmail'];
                                                                                                } ?>">
                                                <button class="btn_3" name="act" value="insert">加入購物車</button>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            <?php
                            $link = mysqli_connect("localhost", "root", '', "sa");
                            if (isset($_GET['Tag'])) {
                                $Tag = $_GET['Tag'];
                                $sql = "select * from product where productTag='$Tag'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) { ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?php echo $product["productPicture"] ?>" alt="#" class="img-fluid" />
                                            <h3>
                                                <a href="single-product.html">
                                                    <?php echo $product['productName'] ?>
                                                </a>
                                            </h3>
                                            <p>$<?php echo $product['productPrice'] ?></p>
                                            <p>店家: <?php echo $product['sellerName'] ?></p>
                                            <form method="get" action="./function/addProductToCart.php">
                                                <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                <input type="hidden" name="userEmail" value="<?php if (isset($_SESSION['userEmail'])) {
                                                                                                    echo $_SESSION['userEmail'];
                                                                                                } ?>">
                                                <button class="btn_3" name="act" value="insert">加入購物車</button>
                                            </form>
                                        </div>
                                    </div>

                                <?php
                                }
                            }
                            if (isset($_GET['Categories']) && isset($sellerName)) {
                                $Categories = $_GET['Categories'];
                                $sql = "select * from product where productTag='$Categories' and sellerName='$sellerName'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) { ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?php echo $product["productPicture"] ?>" alt="#" class="img-fluid" />
                                            <h3>
                                                <a href="single-product.html">
                                                    <?php echo $product['productName'] ?>
                                                </a>
                                            </h3>
                                            <p>$<?php echo $product['productPrice'] ?></p>
                                            <p>店家: <?php echo $product['sellerName'] ?></p>
                                            <form method="get" action="./function/addProductToCart.php">
                                                <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                <input type="hidden" name="userEmail" value="<?php if (isset($_SESSION['userEmail'])) {
                                                                                                    echo $_SESSION['userEmail'];
                                                                                                } ?>">
                                                <button class="btn_3" name="act" value="insert">加入購物車</button>
                                            </form>
                                        </div>
                                    </div>

                                <?php
                                }
                            } else if ((empty($_GET['Categories']) && isset($sellerName))) {
                                $sql = "select * from product where sellerName='$sellerName'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) { ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?php echo $product["productPicture"] ?>" alt="#" class="img-fluid" />
                                            <h3>
                                                <a href="single-product.html">
                                                    <?php echo $product['productName'] ?>
                                                </a>
                                            </h3>
                                            <p>$<?php echo $product['productPrice'] ?></p>
                                            <p>店家: <?php echo $product['sellerName'] ?></p>
                                            <form method="get" action="./function/addProductToCart.php">
                                                <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                <input type="hidden" name="userEmail" value="<?php if (isset($_SESSION['userEmail'])) {
                                                                                                    echo $_SESSION['userEmail'];
                                                                                                } ?>">
                                                <button class="btn_3" name="act" value="insert">加入購物車</button>
                                            </form>
                                        </div>
                                    </div>

                                <?php
                                }
                            } else if ((isset($_GET['Categories']) && empty($sellerName))) {
                                $sql = "select * from product where productTag='$Categories'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) { ?>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_product_item">
                                            <img src="<?php echo $product["productPicture"] ?>" alt="#" class="img-fluid" />
                                            <h3>
                                                <a href="single-product.html">
                                                    <?php echo $product['productName'] ?>
                                                </a>
                                            </h3>
                                            <p>$<?php echo $product['productPrice'] ?></p>
                                            <p>店家: <?php echo $product['sellerName'] ?></p>
                                            <form method="get" action="./function/addProductToCart.php">
                                                <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                <input type="hidden" name="userEmail" value="<?php if (isset($_SESSION['userEmail'])) {
                                                                                                    echo $_SESSION['userEmail'];
                                                                                                } ?>">
                                                <button class="btn_3" name="act" value="insert">加入購物車</button>
                                            </form>
                                        </div>
                                    </div>

                            <?php }
                            } ?>
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

    <!-- feature part here -->
    <section class="feature_part section_padding" style="padding: 50px 0px 150px;">
        <div class="container">
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

    <!--::footer_part start::-->
    <?php include("footer.php"); ?>
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