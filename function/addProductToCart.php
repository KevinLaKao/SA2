<?php
$productCode = $_GET['productCode'];

if (!empty($_GET['userEmail'])) {
    $userEmail = $_GET['userEmail'];
} else {
?>
    <script>
        alert(" 加入購物車失敗請先登入 ！");
        location = '../productList.php';
    </script>
    <?php
}

$link = mysqli_connect('localhost', 'root', '', 'sa');
$isExistSql = "select * from cart";
$result = mysqli_query($link, $isExistSql);
while ($row = mysqli_fetch_array($result)) {
    if ($productCode == $row['productCode']) {
        $newAmount = $row['cartAmount'] + 1;
        $update = "update cart set cartAmount='$newAmount'
            where productCode='$productCode'";
        if (mysqli_query($link, $update)) {
    ?>
            <script>
                alert(" 更改商品成功 ！");
                location = '../productList.php';
            </script>
<?php
        }
    }
}
?>
<script>
    alert(" 正在新增 ！");
</script>
<?php
$sql  = "insert into cart (productCode, userEmail) 
            values ('$productCode', '$userEmail')";
if (mysqli_query($link, $sql)) {
?>
    <script>
        alert(" 新 增 成 功 ！");
        location = '../productList.php';
    </script>
<?php
} else {
?>
    <script>
        alert(" 新 增 失 敗 ！");
        location = '../productList.php';
    </script>
<?php
}
?>