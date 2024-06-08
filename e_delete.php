<?php
include "dbconnect.php";

$id = $_GET['delid'];


$sql = "DELETE FROM employee WHERE employee_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "The record has been deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;  
}

$conn->close();

header("Location: employee_list.php");
exit();
?>