<?php
if (isset($_GET["delete"])) {
    $productCode = $_GET["delete"];
    $link = mysqli_connect('localhost', 'root', '', 'sa');
    $sql = "DELETE FROM `cart` WHERE productCode='$productCode'";
    $result = mysqli_query($link, $sql);
    if ($result) { 
    } else {
    ?>
        <script>
            alert("刪除失敗");
        </script>
    <?php
    }
}
if (isset($_GET["update"])) {
    $productCode = $_GET['update'];
    echo $productCode;
    $cartAmount = $_GET["amount"];
    echo $cartAmount;
    $link = mysqli_connect('localhost', 'root', '', 'sa');
    $sql = "UPDATE `cart` SET cartAmount='$cartAmount'  WHERE productCode='$productCode'";
    $result = mysqli_query($link, $sql);
    if ($result) {
    } else {
    ?>
        <script>
            alert("更新失敗");
        </script>
<?php
    }
}
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food Crate</title>
    <link rel="icon" href="img/foodcrate.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- icon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

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
                        <h2>購物車</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 30px;">產品</th>
                                <th scope="col" style="font-size: 30px;">價格</th>
                                <th scope="col" style="font-size: 30px;">數量</th>
                                <th scope="col" style="font-size: 30px;">金額</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['userName']) || isset($_SESSION['sellerName'])) {
                                $userEmail = $_SESSION['userEmail'];
                                $total = 0;
                                $link = mysqli_connect("localhost", "root", '', "sa");
                                $sql = "select * from cart, product where cart.productCode = product.productCode and historyStatus = 'notReady' and cart.userEmail = '$userEmail';";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) {
                            ?>
                                    <form method="get" action="cart.php">
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="<?php echo $product['productPicture'] ?>" alt="" />
                                                    </div>
                                                    <div class="media-body">
                                                        <p style="font-size: 20px;">
                                                            <?php echo $product['productName'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$<?php $total += $product['productPrice'] * $product['cartAmount'];
                                                        echo $product['productPrice']; ?></h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input class="input-number" name='amount' type="number" value="<?php echo $product['cartAmount'] ?>" placeholder="<?php echo $product['cartAmount'] ?>" min="0" max="50" style="text-align: center; padding-left: 0px; " />
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5>$<?php echo $product['productPrice'] * $product['cartAmount']; ?>

                                                        <button style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="update" value="<?php echo $product['productCode'] ?>" class="btn_5">更新</button>
                                                        <button style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="delete" value="<?php echo $product['productCode'] ?>" class="btn_5">刪除
                                                        </button>

                                                    </h5>
                                                </div>
                                        <tr>
                                    </form>
                                <?php
                                }
                                ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5>總額</h5>
                                    </td>
                                    <td>
                                        <h5>$<?php echo $total;
                                            } ?></h5>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="productSeller.php">繼續購物</a>
                        <a class="btn_1 checkout_btn_1" href="checkout.php">結帳</a>
                    </div>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->
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