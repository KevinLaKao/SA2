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
    <?php include("header.php");?>

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