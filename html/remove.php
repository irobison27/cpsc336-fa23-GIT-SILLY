<?php
//This calls on connect.php to gain access to the SQL database.
include_once "connect.php";
$itemid = $_POST['itemid_del'];
$validity = isset($itemid);
// Checks whether the input ItemID exists. Not proper functionality.
if ($validity) {
    $sql = "DELETE FROM inventory WHERE ItemID = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $itemid);
        if ($stmt->execute()) {
            echo 'The statement was executed.'; }
       	else {
            echo 'Error when executing the statement.'; }
    } else {
        echo 'There was a connection error when preparing the statement.'; }
    $stmt->close();
    $conn->close();
} else {
	echo 'ItemID does not exist.';
}
?>
