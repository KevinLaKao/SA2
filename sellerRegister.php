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
                        <h2>商家登入/註冊</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner" style="width: 325px">
                            <h2>有帳號了嗎?</h2>
                            <p>請點擊下方按鈕進行登入</p>
                            <a href="sellerLogin.php" class="btn_3">登入</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>
                                歡迎! <br />
                                請註冊商家帳號
                            </h3>
                            <a class="btn_1 form-group" href="userRegister.php">會員註冊</a>
                            <form class="row contact_form" action="./function/sellerCRUD.php" method="get">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="sellerEmail" name="sellerEmail" value="" placeholder="電子信箱" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="sellerPassword" name="sellerPassword" value="" placeholder="密碼" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="sellerPhone" name="sellerPhone" value="" placeholder="電話號碼" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="sellerName" name="sellerName" value="" placeholder="店名" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="address" name="sellerAddress" value="" placeholder="居住地址" />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="sellerInfo" value="" placeholder="店家簡介" />
                                </div>

                                <div class="col-md-12 form-group">
                                    <button type="submit" value="sellerCreate" name="act" class="btn_3">
                                        註冊
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

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