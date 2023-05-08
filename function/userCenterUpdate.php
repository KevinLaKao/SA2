<?php
$userName = $_GET['userName'];
$userPhone = $_GET['userPhone'];
$userPassword = $_GET['userPassword'];
$userAddress = $_GET['userAddress'];
$userBirthday = $_GET['userBirthday'];
$userEmail = $_GET['userEmail'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "update user set userName='$userName',
userPhone='$userPhone',
userPassword='$userPassword',
userAddress='$userAddress',
userBirthday='$userBirthday'
where userEmail='$userEmail'";

if (mysqli_query($link, $sql)) {
    $_SESSION['userPhone'] = $userPhone;
    $_SESSION['userPassword'] = $userPassword;
    $_SESSION['userAddress'] = $userAddress;
    $_SESSION['userBirthday'] = $userBirthday;


?>
    <script>
        alert(" 修 改 成 功 ！");
        location = '../userCenter.php';
    </script>
<?php
} else {
?>
    <script>
        alert(" 修 改 失 敗 ！");
        location = '../userCenter.php';
    </script>
<?php
}

?>