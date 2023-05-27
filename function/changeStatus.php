<?php
$act = $_GET['act'];
$userEmail = $_SESSION['userEmail'];

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
    $sellerName = $_SESSION['sellerName'];
    $pickUp = "update cart join product on cart.productCode = product.productCode set historyStatus = 'pickUp' where userEmail = '$userEmail' and sellerName = '$sellerName'";
    $result = mysqli_query($link, $pickUp);
    if ($result) {
        header("Location:../orderStatus.php");
    }
}
if ($act == "complete") {
    $userEmail = $_GET['userEmail'];
    $sellerName = $_SESSION['sellerName'];
    $complete = "update cart join product on cart.productCode = product.productCode set historyStatus = 'complete' where userEmail = '$userEmail' and sellerName = '$sellerName'";
    $result = mysqli_query($link, $complete);
    if ($result) {
        header("Location:../orderStatus.php");
    }
}
