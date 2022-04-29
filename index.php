<?php
    $con = mysqli_connect("localhost","root","","hr");
    if(!$con) {
        echo "Failed to connect";
    }else
    {
        echo ' Connected';
    }
	$query1="select * from countries"; 
    $result1=mysqli_query($con,$query1); 

	$query2="select * from departments"; 
    $result2=mysqli_query($con,$query2); 

	$query3="select * from employees"; 
    $result3=mysqli_query($con,$query3); 

	$query4="select * from jobs"; 
    $result4=mysqli_query($con,$query4); 

	$query5="select * from job_grades"; 
    $result5=mysqli_query($con,$query5); 

	$query6="select * from job_history"; 
    $result6=mysqli_query($con,$query6); 

	$query7="select * from locations"; 
    $result7=mysqli_query($con,$query7); 

	$query8="select * from regions"; 
    $result8=mysqli_query($con,$query8); 

?>

<!DOCTYPE html>
<html>
      
<head>
    <title>
        My Database
    </title>
</head>
  
<body style="text-align:center;">    

<form method="post">
        <input type="submit" name="Countries"
                class="button" value="Countries" />
        <input type="submit" name="Departments"
                class="button" value="Departments" />
		<input type="submit" name="Employees"
                class="button" value="Employees" />
		<input type="submit" name="Jobs"
                class="button" value="Jobs" />
		<input type="submit" name="Job_Grades"
                class="button" value="Job Grades" />
		<input type="submit" name="Job_History"
                class="button" value="Job History" />
		<input type="submit" name="Locations"
                class="button" value="Locations" />
		<input type="submit" name="Regions"
                class="button" value="Regions" />
		<input type="submit" name="Query?"
                class="button" value="Query?" />

</form>

    <?php
        if(array_key_exists('Countries', $_POST)) {
            button1();
        }
        else if(array_key_exists('Departments', $_POST)) {
            button2();
        }
		else if(array_key_exists('Employees', $_POST)) {
            button3();
        }
		else if(array_key_exists('Jobs', $_POST)) {
            button4();
        }
		else if(array_key_exists('Job_Grades', $_POST)) {
            button5();
        }
		else if(array_key_exists('Job_History', $_POST)) {
            button6();
        }
		else if(array_key_exists('Locations', $_POST)) {
            button7();
        }
		else if(array_key_exists('Regions', $_POST)) {
            button8();
        }
		else if(array_key_exists('Query?', $_POST)) {
            button9();
        }
	?>
	<?php 
	function button1() { 
			global $result1;
	?>
			<table align="center" border="1px" style="width:600px; line-height:40px;"> 
				<tr> 
					<th colspan="4"><h2>Countries</h2></th> 
					</tr> 
						  <th> Country ID </th> 
						  <th> Country Name </th> 
						  <th> Region Id </th> 		  
					</tr> 
					
				<?php while($rows=mysqli_fetch_assoc($result1)) 
					{ 
				?>
				<tr align="center" > 
					<td><?php echo $rows['country_id']; ?></td> 
					<td><?php echo $rows['country_name']; ?></td> 
					<td><?php echo $rows['region_id']; ?></td> 
				</tr> 
				<?php 
						   } 
				?> 
			</table>
		<?php } ?> 
	<?php 
	function button2() { 
			global $result2;
	?>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Derpartment</h2></th> 
		</tr> 
			  <th> Department ID </th> 
			  <th> Department Name </th> 
			  <th> Manager Id </th> 
			  <th> Location Id </th>		  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result2)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['department_id']; ?></td> 
		<td><?php echo $rows['department_name']; ?></td> 
		<td><?php echo $rows['manager_id']; ?></td> 
		<td><?php echo $rows['location_id']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 
	<?php 
	function button3() { 
			global $result3;
	?>
	<table align="center" border="1px" style=" line-height:40px;"> 
	<tr> 
		<th colspan="11"><h2>Employeee</h2></th> 
		</tr> 
			  <th> Employee ID </th> 
			  <th> First Name </th> 
			  <th> Last Name </th> 		
			  <th> Email </th> 
			  <th> Phone </th> 
			  <th> Hire Date </th> 
			  <th> Job ID </th>  
			  <th> Salary </th> 
			  <th> Commissions PCT </th> 
			  <th> Manager ID </th>
			  <th> Department ID </th>  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result3)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['employee_id']; ?></td> 
		<td><?php echo $rows['first_name']; ?></td> 
		<td><?php echo $rows['last_name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['phone_number']; ?></td> 
		<td><?php echo $rows['hire_date']; ?></td> 
		<td><?php echo $rows['job_id']; ?></td> 
		<td><?php echo $rows['salary']; ?></td> 
		<td><?php echo $rows['commission_pct']; ?></td> 
		<td><?php echo $rows['manager_id']; ?></td> 
		<td><?php echo $rows['department_id']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 
	<?php 
	function button4() { 
			global $result4;
	?>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Jobs</h2></th> 
		</tr> 
			  <th> Job ID </th> 
			  <th> Job title </th> 
			  <th> Min Salary </th> 
			  <th> Max Salary </th> 		  		  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result4)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['job_id']; ?></td> 
		<td><?php echo $rows['job_title']; ?></td> 
		<td><?php echo $rows['min_salary']; ?></td> 
		<td><?php echo $rows['max_salary']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 
	
	<?php 
	function button5() { 
		global $result5;
	?> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Job Grade</h2></th> 
		</tr> 
			  <th> Grade Level </th> 
			  <th> Lowsest Salary </th> 
			  <th> Highest Salary </th>  		  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result5)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['grade_level']; ?></td> 
		<td><?php echo $rows['lowest_sal']; ?></td> 
		<td><?php echo $rows['highest_sal']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?>

	<?php 
	function button6() { 
			global $result6;
	?>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Job History</h2></th> 
		</tr> 
			  <th> Employee ID </th> 
			  <th> Start Date </th>
			  <th> End Date </th> 	
			  <th> Job ID </th> 		
			  <th> Department ID</th> 			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result6)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['employee_id']; ?></td> 
		<td><?php echo $rows['start_date']; ?></td> 
		<td><?php echo $rows['end_date']; ?></td> 
		<td><?php echo $rows['job_id']; ?></td> 
		<td><?php echo $rows['department_id']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 

	<?php 
	function button7() { 
			global $result7;
	?>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><h2>Locations</h2></th> 
		</tr> 
			  <th> Location ID </th> 
			  <th> Street Address</th> 
			  <th> Postal Code </th> 		  
			  <th> City </th> 	
			  <th> State Province </th> 	
			  <th> Country Id </th> 	
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result7)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['location_id']; ?></td> 
		<td><?php echo $rows['street_address']; ?></td> 
		<td><?php echo $rows['postal_code']; ?></td> 
		<td><?php echo $rows['city']; ?></td> 
		<td><?php echo $rows['state_province']; ?></td> 
		<td><?php echo $rows['country_id']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 
	<?php 
	function button8() { 
			global $result8;
	?>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Regions</h2></th> 
		</tr> 
			  <th> Region ID </th> 
			  <th> Region Name </th> 	  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result8)) 
		{ 
		?> 

	<tr align="center" > 
        <td><?php echo $rows['region_id']; ?></td> 
		<td><?php echo $rows['region_name']; ?></td> 
	</tr> 
	<?php 
               } 
          ?> 
	</table> 
	<?php } ?> 
	<?php 
	function button9() { 
	?>
		<h2>Tính năng đang được phát triển :3 </h2>
	<?php } ?> 

</head>
  
</html>