<?php
$act = $_GET['act'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productInfo = $_GET['productInfo'];
$productAmount = $_GET['productAmount'];
$sellerName = $_SESSION['sellerName'];
$productTag = $_GET['productTag'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == "create") {
    //這裡是新增的語法
    $sqlProduct = "SELECT * FROM product";
    $productCount = mysqli_query($link, $sqlProduct);
    $countRows = mysqli_num_rows($productCount) + 1;
    $sql  = "INSERT INTO product (proName, proPrice, proInfo, proAmount, sellerName, proCode ,proTag,proPicture) 
            values ('$productName', '$productPrice','$productInfo' ,'$productAmount','$sellerName','$countRows','$productTag','img/d5.jpg')";


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
            location = 'sellercenter.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 修 改 失 敗 ！");
            location = 'sellercenter.php';
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