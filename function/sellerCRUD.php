<?php
$act = $_GET['act'];
$selleremail = $_GET['selleremail'];
$sellerpassword = $_GET['sellerpassword'];
$sellerphone = $_GET['sellerphone'];
$sellername = $_GET['sellername'];
$selleraddress = $_GET['selleraddress'];
$sellerinfo = $_GET['sellerinfo'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == "sellercreate") {
    //這裡是新增的語法
    $sql="INSERT INTO `seller`(`sellerName`, `sellerEmail`, `sellerPhone`, `sellerPassword`, `sellerAddress`, `sellerInfo`) 
    VALUES ('$selleremail', '$sellerpassword','$sellerphone','$sellername','$selleraddress','$sellerinfo')";
    if (mysqli_query($link, $sql)) {
?>
<script>
alert(" 註 冊 成 功 ！");
location = '../sellerregister.html';
</script>
<?php
    } else {
    ?>
<script>
alert(" 註 冊 失 敗 ！");
location = '../sellerregister.html';
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