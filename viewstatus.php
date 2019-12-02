<?php

require('config.php');

	$query = "SELECT * FROM hostel WHERE id = '".$_SESSION['id']."' ";
	
	$cq = mysqli_query($con,$query);
	$user = mysqli_fetch_array($cq);
	
?>
<style>
.input{
	cellpadding:5;
}
</style>

<h1 style="color:#000000"><b><center>View Status Hostel</center></b></h1>
<div align="center">
<table cellpadding="15" style="background-color:#e6e6e6">
	<tr>
		<td>Student ID</td>
		<td><input type="text" name="sid" value="<?php echo $user['id'];?>"readonly></td>
	</tr>
		<tr>
		<td>Request ID</td>
		<td><input type="text" name="rid" value="<?php echo $user['req_id'];?>"readonly></td>
	</tr>
		<tr>
		<td>Hostel Name</td>
		<td><input type="text" name="hname" value="<?php echo $user['hostelname'];?>"readonly></td>
	</tr>
		<tr>
		<td>Hostel Block</td>
		<td><input type="text" name="hblock" value="<?php echo $user['hostelblock'];?>"readonly></td>
	</tr>
		<tr>
		<td>Hostel Append</td>
		<td><input type="text" name="happend" value="<?php echo $user['hostelappend'];?>"readonly></td>
	</tr>
	</tr>
		<tr>
		<td>Request Date</td>
		<td><input type="date" name="reqdate" value="<?php echo $user['reqdate'];?>"readonly></td>
	</tr>
	</tr>
		<tr>
		<td>Hostel Status</td>
		<td><input type="text" name="hstatus" value="<?php echo $user['appstatus'];?>"readonly></td>
	</tr>
	</tr>
		<tr>
		<td>Reason</td>
		<td><input type="text" name="reason1" value="<?php echo $user['reason'];?>"readonly></td>
	</tr>
</table>
</div>