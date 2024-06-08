<?php
include "dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $hire_date = $_POST["hire_date"];
    $salary = $_POST["salary"];

    $sql = "INSERT INTO employee (`employee_id`, `name`, `email`, `phone_number`, `hire_date`, `salary`) 
    VALUES (NULL,'$name','$email','$phone','$hire_date','$salary')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: employee_list.php");
        exit();
    } else {
        echo "<h3>Data not inserted</h3>";
        // to get the error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
