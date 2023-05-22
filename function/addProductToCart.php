<?php
$productCode = $_GET['productCode'];

if (!empty($_GET['userEmail'])) {
    $userEmail = $_GET['userEmail'];
} else {
?>
    <script>
        alert(" 加入購物車失敗請先登入 ！");
        location = '../productSeller.php';
    </script>
    <?php
}

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
$isExistSql = "select * from cart";
$result = mysqli_query($link, $isExistSql);
while ($row = mysqli_fetch_array($result)) {
    if ($productCode == $row['productCode'] && $userEmail == $row['userEmail']) {
        $newAmount = $row['cartAmount'] + 1;
        $update = "update cart set cartAmount='$newAmount'
            where productCode='$productCode'and userEmail='$userEmail'";
        if (mysqli_query($link, $update)) {
            header("location:../productSeller.php");
            exit();
        } else {
    ?>
            <script>
                alert(" 新 增 失 敗 ！");
                location = '../productSeller.php';
            </script>
    <?php
        }
    }
}

$sql  = "insert into cart (productCode, userEmail) 
            values ('$productCode', '$userEmail')";
if (mysqli_query($link, $sql)) {
    header("location:../productSeller.php");
    exit();
} else {
    ?>
    <script>
        alert(" 新 增 失 敗 ！");
        location = '../productSeller.php';
    </script>
<?php
}
?>