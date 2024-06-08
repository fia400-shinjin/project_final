<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM employee";
	$result = $conn->query($sql);
?>		

<div class="body2">
        <div class="sub_header">
            <h1 align="center">Employee List</h1>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Hire Date</th>
                <th>Salary</th>
                <th>Update</th>
				<th>Delete</th>
            </tr>
            <?php
		while($row=$result->fetch_assoc()){
            $id=$row["employee_id"];
            
            echo "<tr>"; 	
			echo "<td>".$row["name"] ."</td>";	
			echo "<td>". $row["email"]."</td>";	
			echo "<td>". $row["phone_number"]."</td>";	
			echo "<td>". $row["hire_date"]."</td>";	
			echo "<td>". $row["salary"]."</td>";	
            echo "<td>"."<a href='e_update.php?editid=$id'>Edit</a>"."</td>";
			echo "<td>"."<a href='e_delete.php?delid=$id'>Delete</a>"."</td>";	
			echo "</tr>"; 
		}

	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		
