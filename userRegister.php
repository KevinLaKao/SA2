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
                        <h2>會員登入/註冊</h2>
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
                            <a href="userLogin.php" class="btn_3">登入</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>
                                歡迎! <br />
                                請註冊帳號
                            </h3>
                            <div>
                                <a class="btn_1 form-group" href="sellerRegister.php">商家註冊
                                </a>
                            </div>
                            <form class="row contact_form" action="./function/userCRUD.php" method="get">
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="useremail" value="" placeholder="電子信箱" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="userpassword" value="" placeholder="密碼" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="phone" name="userphone" value="" placeholder="電話號碼" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="username" value="" placeholder="姓名" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="address" name="useraddress" value="" placeholder="居住地址" required />
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="address" name="userbirthday" value="" placeholder="生日" required />
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="usercreate" class="btn_3" name="act">
                                        會員註冊
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