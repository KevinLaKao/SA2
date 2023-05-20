<?php
$act = $_GET['act'];
$userEmail = $_SESSION['userEmail'];

$link = mysqli_connect('localhost', 'root', '', 'sa');
if($act == "processing"){
    $processing = "update cart set historyStatus = 'processing' where userEmail = '$userEmail'";
    $result = mysqli_query($link, $processing);
    if($result){
        header("Location:../historyOrder.php");
    }
}
if($act == "complete"){
    $complete = "update cart set historyStatus = 'processing' where userEmail = '$userEmail'";
    $result = mysqli_query($link, $processing);
    if($result){
        header("Location:../historyOrder.php");
    }
}

?>