<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Food Crate</title>
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
    <!-- member CSS -->
    <link rel="stylesheet" href="css/store.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
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
                                    <a class="nav-link" href="productSeller.php">
                                        店家列表</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        其他
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <?php
                                        if (empty($_SESSION['level'])) {
                                        ?>
                                            <a class="dropdown-item" href="userLogin.php"> 登入 </a>
                                        <?php } ?>
                                        <?php
                                        if (isset($_SESSION['userName'])) {
                                            if ($_SESSION['level'] != 'manager') {
                                        ?>
                                                <a class="dropdown-item" href="checkout.php">下單</a>
                                        <?php }
                                        } ?>
                                        <?php
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                                        ?>
                                            <a class="dropdown-item" href="cart.php">購物車</a>
                                        <?php } ?>
                                        <?php
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                                        ?>
                                            <a class="dropdown-item" href="orderStatus.php">訂單狀態</a>
                                        <?php } ?>
                                        <a class="dropdown-item" href="historyOrder.php">歷史訂單</a>
                                        <?php
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                                        ?>
                                            <a class="dropdown-item" href="userCenter.php">會員中心</a>
                                        <?php }
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                                        ?>
                                            <a class="dropdown-item" href="sellerCenter.php">店家中心</a>
                                        <?php }
                                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'manager') {
                                        ?>
                                            <a class="dropdown-item" href="manager.php">管理中心</a>
                                        <?php } ?>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">聯絡我們</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <?php
                            if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                            ?>
                                <a id="search_1" href="userCenter.php"><i class="ti-user"></i></a>
                            <?php } else if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                            ?>
                                <a id="search_1" href="sellerCenter.php"><i class="ti-user"></i></a>
                            <?php } else if (isset($_SESSION['level']) && $_SESSION['level'] == 'manager') {
                            ?>
                                <a id="search_1" href="manager.php"><i class="ti-user"></i></a>
                            <?php } else { ?>
                                <a id="search_1" href="userLogin.php"><i class="ti-user"></i></a>
                            <?php } ?>
                            <?php
                            if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                            ?>
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart-black-shape"></i>
                                </a>
                            <?php } ?>

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
    </header>

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>訂單狀態</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- 店家顯示訂單狀態 -->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 30px;">產品名稱</th>
                                <th scope="col" style="font-size: 30px;">賣家</th>
                                <th scope="col" style="font-size: 30px;">價格</th>
                                <th scope="col" style="font-size: 30px; padding-right: 25px;">數量</th>
                                <th scope="col" style="font-size: 30px;">狀態</th>
                                <th scope="col" style="font-size: 30px;">訂購人</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['sellerName'])) {
                                $sellerName = $_SESSION['sellerName'];
                                $total = 0;
                                $link = mysqli_connect("localhost", "root", '', "sa");
                                $sql = "select * from product,cart where product.productCode=cart.productCode 
                                        and product.sellerName = '$sellerName';";
                                $rs = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($rs)) {
                            ?>
                                    <tr>
                                        <form action="./function/changeStatus.php" method="get">
                                            <?php if ($row['historyStatus'] == 'pickUp' or $row['historyStatus'] == 'processing') { ?>
                                                <td>
                                                    <?php echo $row['productName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['sellerName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['productPrice']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['cartAmount']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['historyStatus']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['userEmail']; ?>
                                                </td>
                                                <input type="hidden" value="<?php echo $row['userEmail']; ?>" name="userEmail">
                                                <td>
                                                    <?php if ($row['historyStatus'] == 'processing') { ?>
                                                        <button type="submit" style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="act" value="pickUp" class="btn_5">可取貨
                                                    </button>
                                                    <?php } ?>
                                                    <?php if ($row['historyStatus'] == 'pickUp') { ?>
                                                        <button type="submit" style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="act" value="complete" class="btn_5">已取貨完成訂單
                                                        </button>
                                                    <?php } ?>
                                                </td>
                                            <?php } ?>
                                        </form>
                                    <tr>
                                <?php
                                    }
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!--================End Checkout Area =================-->

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