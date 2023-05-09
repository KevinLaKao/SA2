<?php
$userName = $_SESSION['userName'];
$userPhone = $_GET['userPhone'];
$userPassword = $_SESSION['userPassword'];
$userAddress = $_GET['userAddress'];
$userBirthday = $_GET['userBirthday'];
$userEmail = $_SESSION['userEmail'];

$link = mysqli_connect('localhost', 'root', '', 'sa');
$sql = "update user set userPhone='$userPhone',
    userAddress='$userAddress',
    userBirthday='$userBirthday'
    where userEmail='$userEmail';";  
    
if (mysqli_query($link, $sql)) {
    $_SESSION['userPhone'] = $userPhone;
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