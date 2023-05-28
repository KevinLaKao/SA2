<?php
// 檢查是否有上傳文件
if (isset($_FILES['image']) && isset($_SESSION['userEmail'])) {
    $userEmail = $_SESSION['userEmail'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // 指定要保存的目錄和文件名
    $target_dir = '../img/';
    $target_file = $target_dir . basename($file_name);
    // 將文件移動到目標位置
    if (move_uploaded_file($file_tmp, $target_file)) {
        $link = mysqli_connect('localhost', 'root', '', 'sa');
        $sql = "UPDATE `user` SET `userPhoto`='$target_file' WHERE userEmail='$userEmail'";
        if ($result = mysqli_query($link, $sql)) {
?>
            <script>
                alert(" 上 傳 成 功 ！");
                location = '../userCenter.php';
            </script>
        <?php
            exit();
        }
    } else {
        ?>
        <script>
            alert(" 上 傳 失 敗 ！");
            location = '../userCenter.php';
        </script>
        <?php
        exit();
    }
} else if (isset($_FILES['image']) && isset($_SESSION['sellerEmail'])) {
    $sellerEmail = $_SESSION['sellerEmail'];
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // 指定要保存的目錄和文件名
    $target_dir = '../img/';
    $target_file = $target_dir . basename($file_name);
    // 將文件移動到目標位置
    if (move_uploaded_file($file_tmp, $target_file)) {
        $link = mysqli_connect('localhost', 'root', '', 'sa');

        $sql = "UPDATE `seller` SET `sellerPhoto`='$target_file' WHERE sellerEmail='$sellerEmail'";

        if (isset($_POST['productCode'])) {
            $productCode = $_POST['productCode'];
            $file = substr($target_file, 3, strlen($target_file));
            $sql = "UPDATE `product` SET `productPicture`='$file' WHERE productCode='$productCode';";
        }
        if ($result = mysqli_query($link, $sql)) {
        ?>
            <script>
                alert(" 上 傳 成 功 ！");
                location = '../sellerCenter.php';
            </script>
        <?php
            exit();
        }
    } else {
        ?>
        <script>
            alert(" 上 傳 失 敗 ！");
            location = '../sellerCenter.php';
        </script>
<?php
        exit();
    }
}
?>