<?php
$act = $_GET['act'];
$userName = $_GET['userName'];
$userEmail = $_GET['userEmail'];
$userPhone = $_GET['userPhone'];
$userAddress = $_GET['userAddress'];
$userBirthday = $_GET['userBirthday'];
$link = @mysqli_connect('localhost', 'root', '', 'sa');
if ($act == 'delete') {
    //這裡是刪除
    $sql = "delete from user where userName='$userName'";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = '../manager.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 刪 除 成 功 ！");
            location = '../manager.php';
        </script>
<?php
    }
}
?>