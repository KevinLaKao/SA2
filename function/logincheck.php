<?php
$act = $_GET['act'];
$suerLoginEmail = $_GET['userLoginEmail'];
$userLoginPassword = $_GET['userLoginPassword'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'sa');
$sql = "SELECT * FROM user";
$result=mysqli_query($link,$sql);
if ($act = "userlogin") {
    while($row=mysqli_fetch_array($result)){
        if($row['userEmail']=="$userLoginEmail"){
            if($row['userPassword']=="$userLoginPassword"){
    ?>
<script>
alert("登入成功！");
location = '../sellerlogin.html';
</script>
<?php
}}}
?>
<script>
alert("登入失敗！");
location = '../sellerlogin.html';
</script>
<?php
}
?>