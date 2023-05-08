<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Food Crate</title>
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
    <!-- memeber CSS -->
    <link rel="stylesheet" href="css/member.css" />
  </head>

  <body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.html">
                <img src="img/foodcrate.png" alt="logo" height="80px" />
                Foodcrate
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="menu_icon"><i class="fas fa-bars"></i></span>
              </button>

              <div
                class="collapse navbar-collapse main-menu-item"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">首頁</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">關於我們</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="blog.html"
                      id="navbarDropdown_1"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      產品
                    </a>
                    <div
                      class="dropdown-menu"
                      aria-labelledby="navbarDropdown_1"
                    >
                      <a class="dropdown-item" href="productList.php">
                        產品列表</a
                      >
                      <a class="dropdown-item" href="single-product.html"
                        >產品細項</a
                      >
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="blog.html"
                      id="navbarDropdown_3"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      其他
                    </a>
                    <div
                      class="dropdown-menu"
                      aria-labelledby="navbarDropdown_2"
                    >
                      <a class="dropdown-item" href="userLogin.php"> 登入 </a>
                      <a class="dropdown-item" href="checkout.html">下單</a>
                      <a class="dropdown-item" href="cart.php">購物車</a>
                      <a class="dropdown-item" href="confirmation.html"
                        >確認訂單</a
                      >
                      <a class="dropdown-item" href="userCenter.php">會員中心</a>
                      <a class="dropdown-item" href="sellercenter.php"
                        >店家中心</a
                      >
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">聯絡我們</a>
                  </li>
                </ul>
              </div>
              <div class="hearer_icon d-flex align-items-center">
                <a id="search_1" href="login.html"><i class="ti-user"></i></a>
                <a href="cart.php">
                  <i class="flaticon-shopping-cart-black-shape"></i>
                </a>
                <a class="dropdown-item" href="./function/logOut.php">登出</a>
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
              <h3>使用者資訊</h3>
              <form
                class="row contact_form"
                action="./function/userCenterUpdate.php"
                method="get"
              >
                <div class="col-md-6 form-group p_star">
                  用戶名稱
                  <input
                    placeholder="<?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}?>"
                    type="text"
                    class="form-control"
                    id="first"
                    name="userName"
                  />
                </div>
                <div class="col-md-6 form-group p_star">
                  用戶電郵
                  <input
                    placeholder="<?php if(isset($_SESSION['userEmail'])){echo $_SESSION['userEmail'];}?>"
                    type="text"
                    class="form-control"
                    id="email"
                    name="userEmail"
                  />
                </div>

                <div class="col-md-12 form-group p_star">
                  用戶電話
                  <input
                    placeholder="<?php if(isset($_SESSION['userPhone'])){echo $_SESSION['userPhone'];}?>"
                    type="text"
                    class="form-control"
                    id="add1"
                    name="userPhone"
                  />
                </div>
                <div class="col-md-12 form-group p_star">
                  用戶密碼
                  <input
                    placeholder="<?php if(isset($_SESSION['userPassword'])){echo $_SESSION['userPassword'];}?>"
                    type="text"
                    class="form-control"
                    id="city"
                    name="userPassword"
                  />
                </div>
                <div class="col-md-12 form-group p_star">
                  用戶地址
                  <input
                    placeholder="<?php if(isset($_SESSION['userAddress'])){echo $_SESSION['userAddress'];}?>"
                    type="text"
                    class="form-control"
                    id="city"
                    name="userAddress"
                  />
                </div>
                <div class="col-md-12 form-group p_star">
                  用戶生日
                  <input
                    placeholder="<?php if(isset($_SESSION['userBirth'])){echo $_SESSION['userBirth'];}?>"
                    type="date"
                    class="form-control"
                    id="city"
                    name="userBirthday"
                  />
                </div>
                <button type="submit" value="submit" class="btn_3">修改</button>
              </form>
            </div>
            <div class="col-lg-4 userPhoto">
              <div class="userImg">
                <img src="img/client_2.png" alt="" />
              </div>
              <div class="imgRevise">
                <button type="submit" value="submit" class="btn_3">修改</button>
              </div>
            </div>
          </div>
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