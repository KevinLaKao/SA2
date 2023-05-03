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