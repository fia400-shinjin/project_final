<?php
	include "header.php";
	include "dbconnect.php";
	
?>		
	<div class="body">
            <div class="sub_header">
            <h1>Employee Form</h1>
            </div>
            <form action="employee_action.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Your Email">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="+8801*********">
                <label>Hire Date</label>
                <input type="date" name="hire_date">
                <label>Salary</label>
                <input type="text" name="salary" placeholder="Per month">

                <input type="submit" Value="Submit">
            </form>
        </div>
	
	
<?php
	include "footer.php";
?>
