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
    <!-- memeber CSS -->
    <link rel="stylesheet" href="css/member.css" />
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
                        <h2>會員中心</h2>
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
                        <h3>會員資訊<br>
                        </h3>
                        <form class="row contact_form" action="./function/userCenterUpdate.php" method="get">
                            <div class="col-md-6 form-group p_star">
                                用戶名稱
                                <input value="<?php if (isset($_SESSION['userName'])) {
                                                    echo $_SESSION['userName'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userName'])) {
                                                                        echo $_SESSION['userName'];
                                                                    } ?>" type="text" class="form-control" id="first" name="userName" disabled />
                            </div>
                            <div class="col-md-6 form-group p_star">
                                用戶電郵
                                <input value="<?php if (isset($_SESSION['userEmail'])) {
                                                    echo $_SESSION['userEmail'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userEmail'])) {
                                                                        echo $_SESSION['userEmail'];
                                                                    } ?>" type="text" class="form-control" id="email" name="userEmail" disabled />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                用戶電話
                                <input value="<?php if (isset($_SESSION['userPhone'])) {
                                                    echo $_SESSION['userPhone'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userPhone'])) {
                                                                        echo $_SESSION['userPhone'];
                                                                    } ?>" type="text" class="form-control" id="add1" name="userPhone" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                用戶密碼
                                <input value="<?php if (isset($_SESSION['userPassword'])) {
                                                    echo $_SESSION['userPassword'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userPassword'])) {
                                                                        echo $_SESSION['userPassword'];
                                                                    } ?>" type="text" class="form-control" id="city" name="userPassword" disabled />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                用戶地址
                                <input value="<?php if (isset($_SESSION['userAddress'])) {
                                                    echo $_SESSION['userAddress'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userAddress'])) {
                                                                        echo $_SESSION['userAddress'];
                                                                    } ?>" type="text" class="form-control" id="city" name="userAddress" />
                            </div>
                            <div class="col-md-12 form-group p_star">
                                用戶生日 例:(2000/0X/0X)
                                <input value="<?php if (isset($_SESSION['userBirthday'])) {
                                                    echo $_SESSION['userBirthday'];
                                                } ?>" placeholder="<?php if (isset($_SESSION['userBirthday'])) {
                                                                        echo $_SESSION['userBirthday'];
                                                                    } ?>" type="text" class="form-control" name="userBirthday" />
                            </div>
                            <button type="submit" value="submit" class="btn_3">修改</button>
                        </form>
                    </div>
                    <div class="col-lg-4 userPhoto">
                        <?php
                        $userEmail = $_SESSION['userEmail'];
                        $link = mysqli_connect('localhost', 'root', '', 'sa');
                        $sql = "SELECT userPhoto FROM user WHERE userEmail='$userEmail'";
                        $result = mysqli_query($link, $sql);
                        while ($rs = mysqli_fetch_array($result)) {
                            $userPhoto = $rs['userPhoto'];
                        ?>
                            <div class="userImg">
                                <img src="<?php echo substr($userPhoto, 1); ?>" alt="沒有" />
                            </div>
                        <?php } ?>
                        <form action="./function/uploadPicture.php" method="POST" class="imgRevise" enctype="multipart/form-data">
                            <div>
                                <input type="file" name="image" />
                                <input type="submit" class="btn_3" value="修改" />
                            </div>
                    </div>
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
</body>

</html>