<?php
$act = $_GET['act'];
$useremail = $_GET['useremail'];
$userpassword = $_GET['userpassword'];
$userphone = $_GET['userphone'];
$username = $_GET['username'];
$useraddress = $_GET['useraddress'];
$userbirthday = $_GET['userbirthday'];
$link = @mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "usercreate") {
    //這裡是新增的語法
    $sql = "INSERT INTO `user`(`userName`, `userEmail`, `userPhone`, `userPassword`, `userAddress`, `userPhoto`, `userBirthday`, `level`) 
    VALUES ('$username', '$useremail','$userphone','$userpassword','$useraddress', '','$userbirthday','user')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 註 冊 成 功 ！");
            location = '../userLogin.php';
        </script>
    <?php
        exit();
    } else {
    ?>
        <script>
            alert(" 註 冊 失 敗 ！");
            location = '../userRegister.php';
        </script>
    <?php
        exit();
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
        exit();
    } else {
    ?>
        <script>
            alert(" 修 改 失 敗 ！");
            location = 'backStage.php';
        </script>
    <?php
    exit();
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
    exit();
    } else {
    ?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = 'backStage.php';
        </script>
<?php
    exit();
    }
}
?>