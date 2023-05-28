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

$link = mysqli_connect('localhost', 'root', '', 'sa');

// 加入購物車前，判斷購物車內商品數量是否已超出庫存量
$cartAmount = "select sum(cartAmount) from cart where productCode = '$productCode';";
$cartAmountResult = mysqli_query($link, $cartAmount);
while($row = mysqli_fetch_array($cartAmountResult)){
    $cartTotalAmount = $row['sum(cartAmount)'];
}
$productAmount = "select productAmount from product where productCode = '$productCode'";
$productAmountResult = mysqli_query($link, $productAmount);
while($row = mysqli_fetch_array($productAmountResult)){
    $limit = $row['productAmount'];
}

if($limit <= $cartTotalAmount){
    ?>
        <script>
            alert(" 無法加入購物車，商品數量不夠，待商家補貨。 ");
            location = '../productSeller.php';
        </script>
    <?php
    exit();
}


// 同個使用者是否已經加入此商品進購物車，若有則數量＋１，若無則新增
$isExist = "select * from cart";
$isExistResult = mysqli_query($link, $isExist);
while ($row = mysqli_fetch_array($isExistResult)) {
    if ($productCode == $row['productCode'] && $userEmail == $row['userEmail'] && $row['historyStatus'] == 'notReady') {
        $newAmount = $row['cartAmount'] + 1;
        $update = "update cart set cartAmount='$newAmount'
            where productCode='$productCode' and userEmail='$userEmail' and historyStatus = 'notReady';";
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