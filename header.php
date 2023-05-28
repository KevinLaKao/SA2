<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="img/newLogo.png" alt="logo" style="height: 80px" />
                        foodcrate
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
                                <a class="nav-link" href="productSeller.php">
                                    店家列表</a>
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
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['userName'])) {
                                        if ($_SESSION['level'] != 'manager') {
                                    ?>
                                            <a class="dropdown-item" href="checkout.php">下單</a>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                                    ?>
                                        <a class="dropdown-item" href="cart.php">購物車</a>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                                    ?>
                                        <a class="dropdown-item" href="orderStatus.php">訂單狀態</a>
                                    <?php
                                    }
                                    if (isset($_SESSION['level']) && ($_SESSION['level'] == 'user' or $_SESSION['level'] == 'seller')) {
                                    ?>
                                        <a class="dropdown-item" href="historyOrder.php">歷史訂單</a>
                                    <?php
                                    }
                                    if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                                    ?>
                                        <a class="dropdown-item" href="userCenter.php">會員中心</a>
                                    <?php
                                    }
                                    if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                                    ?>
                                        <a class="dropdown-item" href="sellerCenter.php">店家中心</a>
                                    <?php
                                    }
                                    if (isset($_SESSION['level']) && $_SESSION['level'] == 'manager') {
                                    ?>
                                        <a class="dropdown-item" href="manager.php">管理中心</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">聯絡我們</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex align-items-center">
                        <?php
                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                        ?>
                            <a id="search_1" href="userCenter.php"><i class="ti-user"></i></a>
                        <?php } else if (isset($_SESSION['level']) && $_SESSION['level'] == 'seller') {
                        ?>
                            <a id="search_1" href="sellerCenter.php"><i class="ti-user"></i></a>
                        <?php } else if (isset($_SESSION['level']) && $_SESSION['level'] == 'manager') {
                        ?>
                            <a id="search_1" href="manager.php"><i class="ti-user"></i></a>
                        <?php } else { ?>
                            <a id="search_1" href="userLogin.php"><i class="ti-user"></i></a>
                        <?php } ?>
                        <?php
                        if (isset($_SESSION['level']) && $_SESSION['level'] == 'user') {
                        ?>
                            <a href="cart.php">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        <?php
                        }
                        ?>
                        <a class=dropdown-item>
                            <?php
                            if (isset($_SESSION['userName'])) {
                                echo $_SESSION['userName'];
                            ?>
                                <a class="dropdown-item" href="./function/logOut.php">登出</a>
                            <?php
                            } else if (isset($_SESSION['sellerName'])) {
                            ?>
                                <?php echo $_SESSION['sellerName']; ?>
                                <a class="dropdown-item" href="./function/logOut.php">登出</a>
                            <?php
                            }
                            ?>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>