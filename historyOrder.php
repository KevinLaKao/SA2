<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>pillloMart</title>
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
                    $link = mysqli_connect("localhost", "root", '', "sa");
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
                    <th scope="col">買家電郵</th>
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
                  $link = mysqli_connect("localhost", "root", '', "sa");
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
                  $link = mysqli_connect("localhost", "root", '', "sa");
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