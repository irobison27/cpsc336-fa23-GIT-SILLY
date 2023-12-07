<?php
//This calls on connect.php to gain access to the SQL database.
include_once "connect.php";
//test push on dev environment


// This retrieves all of the data from index.html through $_POST
$itemid = $_POST['itemid'];
$itemname = $_POST['itemname'];
$itemquantity = $_POST['itemq'];

//This creates an SQL query accessing the inventory table inserting placeholder values for ItemID, ItemName, and ItemQuantity
$sql = "INSERT INTO inventory (ItemID, ItemName, ItemQuantity) VALUES (?, ?, ?)";

//This prepares the SQL database for the query creating a template for the variables to be inserted into. This also acts as a security measure for the database. 
$stmt = $conn->prepare($sql);

//This is code that checks on whether the prepared connection queuery worked.
if ($stmt) {
//This sets the parameters for the data that is being inserted, in specific the parameters correspond to itemid being a string, itemname being a string, and itemquantity being an integer.
    $stmt->bind_param("ssi", $itemid, $itemname, $itemquantity);

//This checks to see if the statement successfuly executed or not. If it doesn'tit informs what the error was. 
    if ($stmt->execute()) {
        echo 'Data inserted successfully!'; }
    else {
        echo 'Error when executing the statement.'; }
} else{
	echo 'There was a connection error when preparing the statement.';}
//This closes both the statement preparation and the database connection.
$stmt->close();
$conn->close();
?>
