<?php
$act = $_POST['act'];
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productAmount = $_POST['productAmount'];
$sellerName = $_SESSION['sellerName'];
$productTag = $_POST['productTag'];
if (isset($_FILES['image']['name'])) {
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $target_dir = '../img/';
    $target_file = $target_dir . basename($file_name);
}
$link = mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "create") {
    //這裡是新增的語法
    $sqlProduct = "SELECT * FROM product";
    $productCount = mysqli_query($link, $sqlProduct);
    $countRows = mysqli_num_rows($productCount) + 1;
    if (move_uploaded_file($file_tmp, $target_file)) {
        $sql  = "INSERT INTO `product`(`productCode`, `productName`, `productAmount`, `productPicture`, `sellerName`, `productTag`, `productPrice`)
     VALUES ('$countRows','$productName','$productAmount','$target_file','$sellerName','$productTag','$productPrice')";
        echo $sql;
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