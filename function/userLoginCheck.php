<?php
$act = $_GET['act'];
$userLoginEmail = $_GET['userLoginEmail'];
$userLoginPassword = $_GET['userLoginPassword'];
$link = @mysqli_connect('localhost', 'root', '', 'sa');
$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);
if ($act = "userlogin") {
    while ($row = mysqli_fetch_array($result)) {
        if ($row['userEmail'] == "$userLoginEmail") {
            if ($row['userPassword'] == "$userLoginPassword") {
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['userEmail'] = $row['userEmail'];
                $_SESSION['userPhone'] = $row['userPhone'];
                $_SESSION['userPassword'] = $row['userPassword'];
                $_SESSION['userAddress'] = $row['userAddress'];
                $_SESSION['userBirthday'] = $row['userBirthday'];
                $_SESSION['level'] = $row['level'];

?>
                <script>
                    alert("登入成功！");
                    location = '../index.php';
                </script>
    <?php
            }
        }
    }
    ?>
    <script>
        alert("登入失敗！");
        location = '../userLogin.php';
    </script>
<?php
}
?>