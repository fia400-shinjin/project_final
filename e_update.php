<?php
include "header.php";
include "dbconnect.php";

$id = $_GET['editid'];

$sql = "SELECT * FROM employee WHERE employee_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

        <div class="body">
            <div class="sub_header">
              <h1>Update Instrutor</h1>
            </div>
            <form action="e_update_action.php" method="POST">
                <input type="hidden" name="employee_id" value="<?php echo $row['employee_id']; ?>">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo $row['phone_number']; ?>">
                <label>Hire Date</label>
                <input type="date" name="hire_date" value="<?php echo $row['hire_date']; ?>">
                <label>Salary</label>
                <input type="text" name="salary" value="<?php echo $row['salary']; ?>">
                
                <input type="submit" value="Update">
            </form>
        </div>

<?php
	include "footer.php";
?>

