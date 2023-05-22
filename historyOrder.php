<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>pillloMart</title>
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
</head>

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">
              <img src="img/foodcrate.png" alt="logo" height="80px" />
              Foodcrate
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
                  <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    產品
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="productSeller.php">
                      店家列表</a>
                    <a class="dropdown-item" href="single-product.html">產品細項</a>
                  </div>
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
                    <?php if (isset($_SESSION['userName'])) { ?>
                      <a class="dropdown-item" href="checkout.php">下單</a>
                    <?php } ?>
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
  <!-- Header part end-->

  <!-- breadcrumb part start-->
  <section class="breadcrumb_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <h2>歷史訂單</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end-->

  <!--================ confirmation part start =================-->
  <section class="confirmation_part section_padding">
    <div class="container">
      <!-- 追蹤訂單 -->
      <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {  ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="order_details_iner">
              <h3>追蹤訂單</h3>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">店家名稱</th>
                    <th scope="col">產品名稱</th>
                    <th scope="col">數量</th>
                    <th scope="col">總額</th>
                    <th scope="col">狀態</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (isset($_SESSION['userName'])) {
                    $userEmail = $_SESSION['userEmail'];
                    $link = mysqli_connect("localhost", "root", '12345678', "sa");
                    $sql = "select * from cart, product where cart.productCode = product.productCode and (historyStatus='processing' or historyStatus='pickUp') and userEmail='$userEmail' order by product.sellerName;";
                    $rs = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($rs)) {
                  ?>
                      <tr>
                        <td>
                          <span><?php echo $row['sellerName']; ?></span>
                        </td>
                        <td>
                          <span><?php echo $row['productName']; ?></span>
                        </td>
                        <td>
                          <span>x<?php echo $row['cartAmount']; ?></span>
                        </td>
                        <td>
                          <span>$<?php echo $row['productPrice'] * $row['cartAmount']; ?></span>
                        </td>
                        <td>
                          <span><?php echo $row['historyStatus']; ?></span>
                        </td>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- 歷史訂單 -->
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>歷史訂單</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <?php if (isset($_SESSION['sellerName'])) { ?>
                    <th scope="col">賣家電郵</th>
                  <?php } else if (isset($_SESSION['userEmail'])) { ?>
                    <th scope="col">店家名稱</th>
                  <?php }
                  ?>
                  <th scope="col">產品名稱</th>
                  <th scope="col">數量</th>
                  <th scope="col">總額</th>
                  <th scope="col">狀態</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($_SESSION['sellerName'])) {
                  $sellerName = $_SESSION['sellerName'];
                  $link = mysqli_connect("localhost", "root", '12345678', "sa");
                  $sql = "select * from cart, product where cart.productCode = product.productCode and historyStatus='complete' and sellerName = '$sellerName' order by product.sellerName;";
                  $rs = mysqli_query($link, $sql);
                  while ($row = mysqli_fetch_array($rs)) {
                ?>
                    <tr>
                      <td>
                        <span><?php echo $row['userEmail']; ?></span>
                      </td>
                      <td>
                        <span><?php echo $row['productName']; ?></span>
                      </td>
                      <td>
                        <span>x<?php echo $row['cartAmount']; ?></span>
                      </td>
                      <td>
                        <span>$<?php echo $row['productPrice'] * $row['cartAmount']; ?></span>
                      </td>
                      <td>
                        <span><?php echo $row['historyStatus']; ?></span>
                      </td>
                    </tr>
                  <?php
                  }
                } else if (isset($_SESSION['userName'])) {
                  $userEmail = $_SESSION['userEmail'];
                  $link = mysqli_connect("localhost", "root", '12345678', "sa");
                  $sql = "select * from cart, product where cart.productCode = product.productCode and historyStatus='complete' and userEmail='$userEmail'  order by product.sellerName;";
                  $rs = mysqli_query($link, $sql);
                  while ($row = mysqli_fetch_array($rs)) {
                  ?>
                    <tr>
                      <td>
                        <span><?php echo $row['sellerName']; ?></span>
                      </td>
                      <td>
                        <span><?php echo $row['productName']; ?></span>
                      </td>
                      <td>
                        <span>x<?php echo $row['cartAmount']; ?></span>
                      </td>
                      <td>
                        <span>$<?php echo $row['productPrice'] * $row['cartAmount']; ?></span>
                      </td>
                      <td>
                        <span><?php echo $row['historyStatus']; ?></span>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--================ confirmation part end =================-->

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