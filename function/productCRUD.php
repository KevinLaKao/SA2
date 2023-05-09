<?php
$act = $_GET['act'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productInfo = $_GET['productInfo'];
$productAmount = $_GET['productAmount'];
$sellerName = $_SESSION['sellerName'];
$productTag = $_GET['productTag'];

$link = mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "create") {
    //這裡是新增的語法
    $sqlProduct = "SELECT * FROM product";
    $productCount = mysqli_query($link, $sqlProduct);
    $countRows = mysqli_num_rows($productCount) + 1;
    $sql  = "INSERT INTO product (productName, productPrice, productInfo, productAmount, sellerName, productCode , productTag, productPicture) 
            values ('$productName', '$productPrice','$productInfo' ,'$productAmount','$sellerName','$countRows','$productTag','img/d5.jpg')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 新 增 成 功 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 新 增 失 敗 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    }
} elseif ($act == "update") {
    //這裡是修改
    $productCode = $_GET['productCode'];
    $sql = "update product set productName='$productName',
            productAmount='$productAmount',
            productPrice='$productPrice'
            where productCode='$productCode'";

    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert(" 修 改 成 功 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 修 改 失 敗 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    }
} elseif ($act == 'delete') {
    //這裡是刪除
    $productCode = $_GET['productCode'];
    $sql = "delete from product where productCode='$productCode';";
    echo $sql;
    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 刪 除 失 敗 ！");
            location = '../sellerCenter.php';
        </script>
<?php
    }
}
?>