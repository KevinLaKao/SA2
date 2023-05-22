<?php
$act = $_GET['act'];
$newsId = $_GET['newsId'];
$newsTitle = $_GET['newsTitle'];
$newsContent = $_GET['newsContent'];
$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if ($act == "create") {
    //這裡是新增的語法
    $sqlNews = "SELECT * FROM news";
    $productCount = mysqli_query($link, $sqlNews);
    $sql  = "INSERT INTO news (newsId, newsTitle, newsContent) 
            values ('$newsId', '$newsTitle','$newsContent')";
    if (mysqli_query($link, $sql)) {
?>
        <script>
            alert(" 新 增 成 功 ！");
            location = '../manager.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 新 增 失 敗 ！");
            location = '../manager.php';
        </script>
    <?php
    }
} elseif ($act == "update") {
    //這裡是修改
    $productCode = $_GET['productCode'];
    $sql = "update product set productName='$productName',
            productAmount='$productAmount',
            productPrice='$productPrice'
            where productCode='$productCode'";

    if (mysqli_query($link, $sql)) {
    ?>
        <script>
            alert(" 修 改 成 功 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert(" 修 改 失 敗 ！");
            location = '../sellerCenter.php';
        </script>
    <?php
    }
} elseif ($act == 'delete') {
    //這裡是刪除
    $newsId = $_GET['newsId'];
    $sql = "DELETE FROM news WHERE newsId='$newsId'";
    echo $sql;
    //     if (mysqli_query($link, $sql)) {
    //     
    ?>
    // <script>
        //             alert(" 刪 除 成 功 ！");
        //             location = '../manager.php';
        //         
    </script>
    // <?php
        //     } else {
        //     
        ?>
    // <script>
        //             alert(" 刪 除 失 敗 ！");
        //             location = '../manager.php';
        //         
    </script>
    // <?php
        //     }
    }
        ?>