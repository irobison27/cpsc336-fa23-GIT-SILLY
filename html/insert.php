<?php
include_once "connect.php";
$itemid =  $_GET['itemid'];
$itemname = $_GET['itemname'];
$itemquantity = $_GET['itemq'];

//$sql = "INSERT INTO inventory (ItemID, ItemName, ItemQuantity) VALUES ('$itemid', '$itemname', '$itemquantity')";
$sql = "INSERT INTO inventory VALUES ('$itemid', '$itemname', '$itemquantity')";

$result = $conn->query($sql);
echo $result;
if($conn->query($sql) === TRUE){
	echo 'It inserted!!!!!!';
}else{
	echo 'It didnt.....';
}

$conn->close();
?>
