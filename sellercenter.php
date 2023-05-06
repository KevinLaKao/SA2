<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Food Crate</title>
  <link rel="icon" href="img/smile.png" />
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
  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
              <img src="img/foodcrate.png" alt="logo" height="80px" />
              Foodcrate
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu_icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">首頁</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">關於我們</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    產品
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="productList.php">
                      產品列表</a>
                    <a class="dropdown-item" href="single-product.html">產品細項</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    其他
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                    <a class="dropdown-item" href="login.html"> 登入 </a>
                    <a class="dropdown-item" href="checkout.html">下單</a>
                    <a class="dropdown-item" href="cart.php">購物車</a>
                    <a class="dropdown-item" href="confirmation.html">歷史訂單</a>
                    <a class="dropdown-item" href="member.html">使用者中心</a>
                    <a class="dropdown-item" href="sellercenter.html">店家中心</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">聯絡我們</a>
                </li>
              </ul>
            </div>
            <div class="hearer_icon d-flex align-items-center">
              <a href="login.html"><i class="ti-user"></i></a>
              <a href="cart.php">
                <i class="flaticon-shopping-cart-black-shape"></i>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="search_input" id="search_input_box">
      <div class="container">
        <form class="d-flex justify-content-between search-inner">
          <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="ti-close" id="close_search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>

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
              <?php
              $link = mysqli_connect('localhost', 'root', '12345678', 'sa');
              $sql = "select * from seller where sellerName='nancy'";
              $result = mysqli_query($link, $sql);
              $row = mysqli_fetch_array($result)
              ?>
              <div class="col-md-6 form-group ">
                店家名稱:
                <input type="text" disabled="disabled" class="form-control" id="number" name="sellerPhone" placeholder=<?php echo $row['sellerName'] ?> />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-6 form-group">
                電話號碼
                <input type="text" class="form-control" id="number" name="sellerPhone" placeholder="電話號碼" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-6 form-group">
                電子郵件
                <input type="text" class="form-control" id="email" name="sellerEmail" placeholder="電子郵件" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-12 form-group">
                店家地址
                <input type="text" class="form-control" id="add1" name="sellerAddress" placeholder="店家地址" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>店家簡介</h3>
                </div>
                <textarea class="form-control" name="sellerInfo" id="message" rows="1" placeholder="店家簡介"></textarea>
              </div>
              <button type="submit" name="act" value="update" class="btn_3">
                送出修改資料
              </button>
            </form>
          </div>
          <div class="sellerPhoto">
            <div class="sellerImg">
              <img src="img/client_1.png">
            </div>
            <div class="imgRevise">
              <button type="submit" value="submit" class="btn_3 stick">
                修改大頭貼
              </button>
            </div>
          </div>
        </div>
  </section>
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>新增商品資訊</h3>
            <form class="row contact_form" action="./function/productCRUD.php" method="get">
              <div class="col-md-6 form-group ">
                店家名稱
                <input type="text" class="form-control" id="first" name="sellerName" placeholder="店家名稱" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-6 form-group ">
                商品名稱
                <input type="text" class="form-control" id="number" name="productName" placeholder="商品名稱" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-6 form-group">
                商品價格
                <input type="number" class="form-control" id="number" name="productPrice" placeholder="商品價格" />
                <span class="placeholder"></span>
              </div>
              <div class="col-md-6 form-group ">
                商品數量
                <input type="number" class="form-control" id="number" name="productAmount" placeholder="商品數量" />
                <span class="placeholder"></span>
              </div>

              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>商品簡介</h3>
                </div>
                <textarea class="form-control" name="productInfo" id="message" rows="1" placeholder="商品簡介"></textarea>
              </div>
              <button type="submit" name="act" value="create" class="btn_3">
                送出產品資料
              </button>
            </form>
          </div>
          <div class="sellerPhoto">
            <div class="sellerImg">
              <img src="img/client_1.png">
            </div>
            <div class="imgRevise">
              <button type="submit" value="submit" class="btn_3 stick">
                新增產品照片
              </button>
            </div>
            <div>
  </section>


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

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/arrivel/arrivel_1.png" alt="" />
                    </div>
                    <div class="media-body" name="productName">
                      <input type="text" class="form-control" id="first" name="sellerName" placeholder="商品名稱" />
                    </div>
                  </div>
                </td>
                <td>
                  <input type="number" class="form-control" id="number" name="productPrice" placeholder="商品價格" />
                </td>
                <td>
                  <div class="product_count">
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                                  class="input-text qty input-number" />
                                <button
                                  class="increase input-number-increment items-count" type="button">
                                  <i class="ti-angle-up"></i>
                                </button>
                                <button
                                  class="reduced input-number-decrement items-count" type="button">
                                  <i class="ti-angle-down"></i>
                                </button> -->
                    <input type="number" class="form-control" id="number" name="productAmount" placeholder="數量" />
                  </div>
                </td>
                <td>
                  <button type="submit" name="act" value="update" class="btn_3">
                    修改
                  </button>
                  <button type="submit" name="act" value="delete" class="btn_3">
                    刪除
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/arrivel/arrivel_2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <input type="text" class="form-control" id="first" name="sellerName" placeholder="商品名稱" />
                    </div>
                  </div>
                </td>
                <td>
                  <input type="number" class="form-control" id="number" name="productPrice" placeholder="商品價格" />
                </td>
                <td>
                  <div class="product_count">
                    <input type="number" class="form-control" id="number" name="productAmount" placeholder="數量" />
                  </div>
                </td>
                <td>
                  <button type="submit" name="act" value="update" class="btn_3">
                    修改
                  </button>
                  <button type="submit" name="act" value="delete" class="btn_3">
                    刪除
                  </button>
                </td>
              </tr>



            </tbody>
          </table>

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