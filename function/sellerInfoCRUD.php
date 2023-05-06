<?php
$act = $_GET['act'];
$sellerPhone = $_GET['sellerPhone'];
$sellerName = $_GET['sellerName'];
$sellerEmail = $_GET['sellerEmail'];
$sellerAddress = $_GET['sellerAddress'];
$sellerInfo = $_GET['sellerInfo'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
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
    $result=mysqli_query($link,$sql);
    if ($result) {
    ?>
        <script>
            alert(" 修 改 成 功 ！");
            location = '../sellercenter.html';
        </script>
    <?php
    }else
    ?>
    <script>
            alert(" 修 改 失 敗 ！");
            location = '../sellercenter.html';
        </script>
    <?php
    }
   elseif ($act == 'delete') {
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