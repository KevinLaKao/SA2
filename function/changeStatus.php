<?php
$act = $_GET['act'];
if(isset($_SESSION['userEmail'])){
    $userEmail = $_SESSION['userEmail'];
}

if(isset($_GET['userEmail'])){
    $userEmail = $_GET['userEmail'];
}


$link = mysqli_connect('localhost', 'root', '', 'sa');
if ($act == "processing") {
    $processing = "update cart set historyStatus = 'processing' where userEmail = '$userEmail'";
    $result = mysqli_query($link, $processing);
    if ($result) {
        header("Location:../historyOrder.php");
    }
}
if ($act == "pickUp") {
    $userEmail = $_GET['userEmail'];
    $productCode = $_GET['productCode'];
    $pickUp = "update cart set historyStatus = 'pickUp' where userEmail = '$userEmail' and productCode = '$productCode';";
    $result = mysqli_query($link, $pickUp);
    if ($result) {
        header("Location:../orderStatus.php");
    }
}
if ($act == "complete") {
    $userEmail = $_GET['userEmail'];
    $productCode = $_GET['productCode'];
    $complete = "update cart set historyStatus = 'complete' where userEmail = '$userEmail' and productCode = '$productCode';";
    $result = mysqli_query($link, $complete);
    if ($result) {
        header("Location:../orderStatus.php");
    }
}
