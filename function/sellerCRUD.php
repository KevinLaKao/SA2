<?php
$act = $_GET['act'];
$sellerEmail = $_GET['sellerEmail'];
$sellerPassword = $_GET['sellerPassword'];
$sellerPhone = $_GET['sellerPhone'];
$sellerName = $_GET['sellerName'];
$sellerAddress = $_GET['sellerAddress'];
$sellerInfo = $_GET['sellerInfo'];
$link = @mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "sellerCreate") {
    //這裡是新增的語法
    $sql = "INSERT INTO `seller`(`sellerName`, `sellerEmail`, `sellerPhone`, `sellerPassword`, `sellerPhoto`, `sellerAddress`, `sellerInfo`, `level`) 
    VALUES ('$sellerName', '$sellerEmail','$sellerPhone','$sellerPassword', 'img/client_2.png','$sellerAddress','$sellerInfo','seller')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 註 冊 成 功 ！");
            location = '../sellerLogin.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 註 冊 失 敗 ！");
            location = '../sellerRegister.php';
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
} else if ($act == 'delete') {
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