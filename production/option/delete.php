<?php 
include "../db/db.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `product_add_details` WHERE `id`='$id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		echo "<script>window.location = '../cancel_order.php';</script>";
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>