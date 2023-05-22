<?php
$act = $_GET['act'];
$productCode = $_GET['productCode'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productPicture = $_GET['productPicture'];
$productAmount = $_GET['productAmount'];
$productTag = $_GET['productTag'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == 'delete') {
      //這裡是刪除
      $productCode = $_GET['productCode'];
      $sql = "delete from product where productCode='$productCode';";
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
              alert(" 刪 除 失 敗 ！");
              location = '../manager.php';
          </script>
  <?php
      }
  }elseif ($act == "update") {
    //這裡是修改
    $productCode = $_GET['productCode'];
    $sql = "update product set productCode='$productCode',
            productName='$productName',
            productPrice='$productPrice',
            productPicture='$productPicture',
            productAmount='$productAmount',
            productTag='$productTag'
            where productCode='$productCode'";
    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert(" 修 改 成 功 ！");
            location = '../manager.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 修 改 失 敗 ！");
            location = '../manager.php';
        </script>
    <?php
    }
}
  ?>