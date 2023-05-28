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
                        <h2>店家中心</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>店家資訊</h3>
                        <form class="row contact_form" action="./function/sellerInfoCRUD.php" method="get" novalidate="novalidate">
                            <div class="col-md-6 form-group ">
                                店家名稱:
                                <input type="text" disabled="disabled" class="form-control" id="number" name="sellerPhone" value=<?php echo $_SESSION['sellerName'] ?> />
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-6 form-group">
                                電話號碼
                                <input type="text" class="form-control" id="number" name="sellerPhone" value="<?php echo $_SESSION['sellerPhone'] ?>" />
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-6 form-group">
                                電子郵件
                                <input type="text" disabled="disabled" class="form-control" id="email" name="sellerEmail" value="<?php echo $_SESSION['sellerEmail'] ?>" />
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                店家地址
                                <input type="text" class="form-control" id="add1" name="sellerAddress" value="<?php echo $_SESSION['sellerAddress'] ?>" />
                                <span class="placeholder"></span>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>店家簡介</h3>
                                </div>
                                <textarea class="form-control" name="sellerInfo" id="message" rows="1" aria-valuetext="<?php echo $_SESSION['sellerInfo'] ?>"></textarea>
                            </div>
                            <button type="submit" name="act" value="update" class="btn_3" style="margin-left: 15px;">
                                送出修改資料
                            </button>
                        </form>
                    </div>
                    <div class="col-lg-4 userPhoto" style="display: flex; flex-direction:column; justify-content:space-around;">
                        <?php
                        $sellerEmail = $_SESSION['sellerEmail'];
                        $link = mysqli_connect('localhost', 'root', '', 'sa');
                        $sql = "SELECT sellerPhoto FROM seller WHERE sellerEmail='$sellerEmail'";
                        $result = mysqli_query($link, $sql);
                        while ($rs = mysqli_fetch_array($result)) {
                            $sellerPhoto = $rs['sellerPhoto'];
                        }
                        ?>
                        <img src="<?php echo $sellerPhoto; ?>" alt="沒有" />
                        <form action="./function/uploadPicture.php" method="POST" enctype="multipart/form-data">
                            <h3>修改圖片</h3>
                            <div style="display: flex;">
                                <input type="file" name="image" />
                                <input type="submit" class="btn_3" value="修改" />
                            </div>
                        </form>
                    </div>
                </div>
    </section>

    <!-- 新增商品 -->
    <section class="checkout_area section_padding" style="padding: 0px;">
        <div class="container">
            <div class="billing_details row">
                <div class="col-lg-8">
                    <h3>新增商品</h3>
                    <form id="form1" action="./function/productCRUD.php" method="get">
                        <div>
                            <div style="display: flex; justify-content: space-evenly; padding-bottom: 25px;">
                                <div>
                                    店家名稱
                                    <input type=" text" class="form-control" id="first" name="sellerName" disabled="disabled" placeholder="<?php echo $_SESSION['sellerName'] ?>" />
                                    <span class="placeholder"></span>
                                </div>
                                <div>
                                    商品名稱
                                    <input type="text" class="form-control" id="number" name="productName" placeholder="商品名稱" />
                                    <span class="placeholder"></span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-evenly; padding-bottom: 25px;">
                                <div>
                                    商品價格
                                    <input type="text" class="form-control" id="number" name="productPrice" placeholder="商品價格" />
                                    <span class="placeholder"></span>
                                </div>
                                <div>
                                    商品數量
                                    <input type="text" class="form-control" id="number" name="productAmount" placeholder="商品數量" />
                                    <span class="placeholder"></span>
                                </div>
                            </div>
                            <div style="display: flex; justify-content: space-evenly; padding-bottom: 25px;">
                                <div>
                                    商品類別
                                    <input type="text" class="form-control" id="number" name="productTag" placeholder="請輸入:生鮮or雜糧or蔬果"></input>
                                </div>
                                <div style="width: 182.5px;"></div>
                            </div>
                        </div>
                        <input type="hidden" name="act" value="create">
                    </form>
                </div>
                <div class="col-lg-4" style="display: flex; flex-direction: column; justify-content: flex-end;">
                    <button type="submit" name="act" value="create" class="btn_3" onclick="submitForm();">
                        送出產品資料
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 店家修改刪除產品 -->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 30px;"></th>
                                <th scope="col" style="font-size: 30px;">名稱</th>
                                <th scope="col" style="font-size: 30px;">價格</th>
                                <th scope="col" style="font-size: 30px; padding-right: 25px;">數量</th>
                                <th scope="col" style="font-size: 30px;">類型</th>
                                <th scope="col" style="font-size: 30px;"></th>
                                <th scope="col" style="font-size: 30px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['sellerName'])) {
                                $sellerName = $_SESSION['sellerName'];
                                $total = 0;
                                $link = mysqli_connect("localhost", "root", '', "sa");
                                $sql = "select * from product where product.sellerName = '$sellerName'";
                                $rs = mysqli_query($link, $sql);
                                while ($product = mysqli_fetch_array($rs)) {
                                    if ($product['productPicture'] != '') {
                            ?>
                                        <tr>
                                            <form action="./function/productCRUD.php" method="get">
                                                <td>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img src="<?php echo $product['productPicture']; ?>" alt="" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input class="input-number" name='productName' type="text" value="<?php echo $product['productName']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input class="input-number" name='productPrice' type="text" value="<?php echo $product['productPrice']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input class="input-number" name='productAmount' type="text" value="<?php echo $product['productAmount']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product_count">
                                                        <input class="input-number" name='productTag' type="text" value="<?php echo $product['productTag']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                    </div>
                                                </td>
                                                <input type="hidden" value="<?php echo $product['productPicture']; ?>" name="productPicture">
                                                <input type="hidden" value="<?php echo $product['productCode']; ?>" name="productCode">
                                                <td>
                                                    <button type="submit" style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="act" value="update" class="btn_5">修改
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="submit" style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="act" value="delete" class="btn_5">刪除
                                                    </button>
                                                </td>
                                            </form>
                                        <tr>
                                        <?php
                                    } else {
                                        ?>
                                        <tr>
                                            <td>
                                                <div style="display: flex;">
                                                    <form action="./function/uploadPicture.php" method="post" enctype="multipart/form-data" id="abcd">
                                                        <input type="hidden" name="productCode" value="<?php echo $product['productCode']; ?>">
                                                        <input type="file" name="image" />
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input class="input-number" name='productName' type="text" value="<?php echo $product['productName']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input class="input-number" name='productPrice' type="text" value="<?php echo $product['productPrice']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input class="input-number" name='productAmount' type="text" value="<?php echo $product['productAmount']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input class="input-number" name='productTag' type="text" value="<?php echo $product['productTag']; ?>" min="0" max="10" style="text-align: center; padding-left: 0px; ">
                                                </div>
                                            </td>
                                            <input type="hidden" value="<?php echo $product['productPicture']; ?>" name="productPicture">
                                            <input type="hidden" value="<?php echo $product['productCode']; ?>" name="productCode">
                                            <td>
                                                <button form="abcd" type="submit" style="border-radius: 5px; margin-top: 10px; border-color: gainsboro;" name="act" value="update" class="btn_5">新增圖片
                                                </button>
                                            </td>
                                            <td></td>
                                        <tr>
                                <?php
                                    }
                                }
                            }
                                ?>
                        </tbody>
                    </table>
                </div>
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

    <script>
        submitForm = () => {
            document.getElementById("form1").submit();
        }
    </script>
</body>

</html>