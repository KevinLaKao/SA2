<?php
$act = $_GET['act'];
$sellerLoginEmail = $_GET['sellerLoginEmail'];
$sellerLoginPassword = $_GET['sellerLoginPassword'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "SELECT * FROM seller";
$result=mysqli_query($link,$sql);
if ($act = "sellerlogin") {
    while($row=mysqli_fetch_array($result)){
        if($row['sellerEmail']=="$sellerLoginEmail"){
            if($row['sellerPassword']=="$sellerLoginPassword"){
                $_SESSION['sellerName']=$row['sellerName'];
                $_SESSION['sellerEmail']=$row['sellerEmail'];
                $_SESSION['sellerPhone']=$row['sellerPhone'];
                $_SESSION['sellerPassword']=$row['sellerPassword'];
                $_SESSION['sellerAddress']=$row['sellerAddress'];
                $_SESSION['sellerPhoto']=$row['sellerPhoto'];
                $_SESSION['sellerInfo']=$row['sellerInfo'];
                $_SESSION['level']=$row['level'];
    ?>
<script>
alert("登入成功！");
location = '../sellerLogin.php';
</script>
<?php
}}}
?>
<script>
alert("登入失敗！");
location = '../sellerLogin.php';
</script>
<?php
}
?>