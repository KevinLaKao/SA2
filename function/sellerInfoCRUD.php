<?php
$act = $_GET['act'];
$sellerName = $_SESSION['sellerName'];
$sellerEmail = $_SESSION['sellerEmail'];
$sellerPhone = $_GET['sellerPhone'];
$sellerAddress = $_GET['sellerAddress'];
$sellerInfo = $_GET['sellerInfo'];

$link = mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "create") {
    //這裡是新增的語法
    $sql  = "insert into account (member_id, member_password, member_name) 
            values ('$member_id', '$member_password','$member_name')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 新 增 成 功 ！");
            location = 'backStage.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 新 增 失 敗 ！");
            location = 'backStage.php';
        </script>
    <?php
    }
} elseif ($act == "update") {
    //這裡是修改
    $sql = "update seller set sellerPhone='$sellerPhone',
            sellerAddress='$sellerAddress',
            sellerInfo='$sellerInfo'
            where sellerEmail='$sellerEmail' and sellerName='$sellerName'";

    if (mysqli_query($link, $sql)) {
        $_SESSION['sellerPhone'] = $sellerPhone;
        $_SESSION['sellerAddress'] = $sellerAddress;
        $_SESSION['sellerInfo'] = $sellerInfo;
    ?>

        <script>
            alert(" 修 改 成 功 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    } else
    ?>
    <script>
        alert(" 修 改 失 敗 ！");
        location = '../sellerCenter.php';
    </script>
    <?php
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