<?php
$act = $_GET['act'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productInfo = $_GET['productInfo'];
$productAmount = $_GET['productAmount'];
$sellerName = $_SESSION['sellerName'];
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
}
?>