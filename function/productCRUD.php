<?php
$act = $_GET['act'];
$productName = $_GET['productName'];
$productPrice = $_GET['productPrice'];
$productInfo = $_GET['productInfo'];
$productAmount = $_GET['productAmount'];


$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == "create") {
    //這裡是新增的語法

    $sql  = "insert into product (productName, productPrice, productInfo, productAmount) 
            values ('$productName', '$productPrice','$productInfo' ,'$productAmount')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 新 增 成 功 ！");
            location = '../newProduct.html';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 新 增 失 敗 ！");
            location = '../newProduct.html';
        </script>
    <?php
    }
} elseif ($act == "update") {
    //這裡是修改
    $sql = "update account set member_id='$member_id',
            member_password='$member_password'
            where member_name='$member_name'";

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
    $sql = "delete from account where member_id='$member_id'";
    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = 'backStage.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = 'backStage.php';
        </script>
<?php
    }
}
?>