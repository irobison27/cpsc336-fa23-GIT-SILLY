<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.php" media"screen" /> 
	<title>Inventory System</title>
</head>
<body>
        <p>
		<b><u>GIT SILLY</b></u>
	</p>

        <p>
		<b>Simple Inventory System Project</b>
        </p>

        <p>
Team Members:
Ian Robison,
Briana Tolleson,
Sasha Stevens,
Garrett Ford.
        </p>

	<form action="insert.php" method="POST" class="form">

	<input type="text" placeholder="Item ID" class="ItemID" name="itemid" />
	<input type="text" placeholder="Item Name" class="ItemName" name ="itemname"/>
	<input type="number" placeholder="Item Quantity" class="ItemQ" name ="itemq" />
	<button type="submit" class="addbutton">Add Item</button>

	</form>

	<form action="remove.php" method="POST" class="form">

	<input type="text" placeholder="Item ID" class="ItemID" name="itemid_del" />
	<button type="submit" class="deletebutton">Delete Item</button>

<table>
<thead>
<tr>
<th>ItemID</th>
<th>Item Name</th>
<th>Item Quantity</th>
</tr>

<tbody>
<?php
include_once "connect.php";
$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
	echo "<tr>
	<td>" . $row['ItemID'] . "</td>
	<td>" . $row['ItemName'] . "</td>
	<td>" . $row['ItemQuantity'] . "</td>
	</tr>";
}
?>
</tbody>
</table>
</body>
</html>
