<?php
$proCode = $_GET['proCode'];

if(isset($_GET['userEmail'])){
    $userEmail = $_GET['userEmail'];
}else{
    ?>
    <script>
        alert(" 加入購物車失敗請先登入 ！");
        location = '../index.php';
    </script>
<?php
}

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
$isExistSql = "select * from cart";
$result = mysqli_query($link, $isExistSql);
while($row=mysqli_fetch_array($result)){
    if($proCode == $row['proCode']){
        $row['cartAmount'] = $row['cartAmount'] + 1;
        ?>
    <script>
        alert(" 新 增 成 功 ！");
        location = '../productList.php';
    </script>
<?php
    }else{

    }
}

$sql  = "insert into cart (proCode, userEmail) 
            values ('$proCode', '$userEmail')";
            
if (mysqli_query($link, $sql)) {
?>
    <script>
        alert(" 新 增 成 功 ！");
        location = '../productList.php';
    </script>
<?php
} else {
?>
    <script>
        alert(" 新 增 失 敗 ！");
        location = '../productList.php';
    </script>
<?php
}
?>

