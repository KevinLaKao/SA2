<?php
$act = $_GET['act'];
$userEmail = $_SESSION['userEmail'];

$link = mysqli_connect('localhost', 'root', '12345678', 'sa');
if($act == "processing"){
    $processing = "update cart set historyStatus = 'processing' where userEmail = '$userEmail'";
    $result = mysqli_query($link, $processing);
    if($result){
        header("Location:../orderStatus.php");
    }
}
if($act == "pickUp"){
    $userEmail=$_GET['userEmail'];
    $sellerName= $_SESSION['sellerName'];
    $pickUp = "update cart join product on cart.productCode = product.productCode set historyStatus = 'pickUp' where userEmail = '$userEmail' and sellerName = '$sellerName'";
    $result = mysqli_query($link, $pickUp);
    if($result){
        header("Location:../orderStatus.php");
    }

}
if($act == "complete"){
    $complete = "update cart set historyStatus = 'processing' where userEmail = '$userEmail'";
    $result = mysqli_query($link, $processing);
    if($result){
        header("Location:../orderStatus.php");
    }
}
