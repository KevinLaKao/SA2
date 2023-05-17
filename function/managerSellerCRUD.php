<?php
$act = $_GET['act'];
$sellerEmail = $_GET['sellerEmail'];
$sellerPassword = $_GET['sellerPassword'];
$sellerPhone = $_GET['sellerPhone'];
$sellerName = $_GET['sellerName'];
$sellerAddress = $_GET['sellerAddress'];
$sellerInfo = $_GET['sellerInfo'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == 'delete') {
      //這裡是刪除
      $sql = "delete from seller where sellerEmail='$sellerEmail'";
      if (mysqli_query($link, $sql)) {
      ?>
          <script>
              alert(" 刪 除 成 功 ！");
              location = '../manager.php';
          </script>
      <?php
      } else {
      ?>
          <script>
              alert(" 刪 除 成 功 ！");
              location = '../manager.php';
          </script>
  <?php
      }
  }
  ?>