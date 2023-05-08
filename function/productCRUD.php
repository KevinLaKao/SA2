<?php
$act = $_GET['act'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productInfo = $_GET['productInfo'];
$productAmount = $_GET['productAmount'];
$sellerName = $_GET['sellerName'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == "create") {
    //這裡是新增的語法

    $sql  = "insert into product (productName, productPrice, productInfo, productAmount, sellerName) 
            values ('$productName', '$productPrice','$productInfo' ,'$productAmount','$sellerName')";
    if (mysqli_query($link, $sql)) {
?>
<script>
alert(" 新 增 成 功 ！");
location = '../sellercenter.php';
</script>
<?php
    } else {
    ?>
<script>
alert(" 新 增 失 敗 ！");
location = '../sellercenter.php';
</script>
<?php
    }
} elseif ($act == "update") {
    //這裡是修改
    $sql = "update account set productName='$productName',
            productAmount='$productAmount',
            productPrice='$productPrice'
            where sellerName='$sellerName'";

    if (mysqli_query($link, $sql)) {
    ?>
<script>
alert(" 修 改 成 功 ！");
location = 'backStage.php';
</script>
<?php
    } else {
    ?>
<script>
alert(" 修 改 失 敗 ！");
location = 'backStage.php';
</script>
<?php
    }
} elseif ($act == 'delete') {
    //這裡是刪除
    $sql = "delete from account where productName='$productName'";
    if (mysqli_query($link, $sql)) {
    ?>
<script>
alert(" 刪 除 成 功 ！");
location = 'sellercenter.php';
</script>
<?php
    } else {
    ?>
<script>
alert(" 刪 除 成 功 ！");
location = 'sellercenter.php';
</script>
<?php
    }
}
?>