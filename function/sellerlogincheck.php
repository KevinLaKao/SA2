<?php
$sellerLoginEmail = $_GET['sellerLoginEmail'];
$sellerLoginPassword = $_GET['sellerLoginPassword'];
$link = @mysqli_connect('localhost', 'root', '', 'sa');
$sql = "SELECT * FROM seller";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result)) {
    if ($row['sellerEmail'] == "$sellerLoginEmail") {
        if ($row['sellerPassword'] == "$sellerLoginPassword") {
            $_SESSION['sellerName'] = $row['sellerName'];
            $_SESSION['sellerEmail'] = $row['sellerEmail'];
            $_SESSION['sellerPhone'] = $row['sellerPhone'];
            $_SESSION['sellerPassword'] = $row['sellerPassword'];
            $_SESSION['sellerAddress'] = $row['sellerAddress'];
            $_SESSION['sellerPhoto'] = $row['sellerPhoto'];
            $_SESSION['sellerInfo'] = $row['sellerInfo'];
            $_SESSION['level'] = $row['level'];
            header('Location: ../index.php');
        }
    }
}
?>
<script>
    alert("登入失敗！");
    location = '../sellerRegister.php';
</script>