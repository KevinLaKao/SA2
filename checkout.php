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
  
    <!-- breadcrumb part start-->
  <section class="breadcrumb_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <h2>下單</h2>
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
            <h3>領貨人資訊</h3>
            <form class="row contact_form" action="historyOrder.php" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="姓名"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="電話號碼"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="電子郵件"></span>
              </div>

              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="住家地址"></span>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>意見回饋</h3>
                </div>
                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="order_box">
              <h2>你的訂單</h2>
              <form action="./function/changeStatus.php" method="get">
                <table>
                  <thead>
                    <tr>
                      <th>品名</th>
                      <th>數量</th>
                      <th>單價</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($_SESSION['userName'])) {
                      $link = mysqli_connect("localhost", "root", '', "sa");
                      $sql = "select * from cart, product where cart.productCode = product.productCode and historyStatus='notReady';";
                      $rs = mysqli_query($link, $sql);
                      $total = 0;
                      while ($row = mysqli_fetch_array($rs)) {
                        $total += $row['productPrice'] * $row['cartAmount'];
                    ?>
                        <tr>
                          <td><?php echo $row['productName']; ?></td>
                          <td>x<?php echo $row['cartAmount']; ?></td>
                          <td>$<?php echo $row['productPrice']; ?></td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
                總計$<?php echo $total; ?>
                <button class="btn_3" type="submit" name="act" value="processing">確認下單</button>
              </form>
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