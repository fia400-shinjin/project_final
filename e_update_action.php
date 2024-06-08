<?php
include "dbconnect.php";

$employee_id = $_POST['employee_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hire_date = $_POST['hire_date'];
$salary = $_POST['salary'];





$sql = "UPDATE employee SET name='$name', email='$email', phone_number='$phone', hire_date='$hire_date', salary='$salary' WHERE employee_id=$employee_id";

if ($conn->query($sql) === TRUE) {
    header("Location: employee_list.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();



?>