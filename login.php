<?php

//connectivity
require('config.php');


if(isset($_POST['login']))
{
	$u = $_POST['uname'];
	$pass = $_POST['upass'];
	$p = md5($pass);
	$_SESSION['user']=$u;
	$_SESSION['pass']=$p;
//user check
$q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
$cq = mysqli_query($con,$q);
$ret = mysqli_num_rows($cq);
if($ret == true)
{
	echo "<script>document.location='user'</script>";
	//echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
}
else
{
	echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
}
}

?>
<html>
<body >
<div align="center">
<form method="post">
<fieldset style="display: inline-flex; "><legend><font size="+2"><strong>Login Panel</strong></font></legend>
<p><b>UserName : </b><input type="text" name="uname" required/></p>
<p><b>Password : </b><input type="password" name="upass" required/></p><br>
<p><input type="submit" value="Login" name="login"/></p>
<p>Forgot password? Reset <a href="forgotpassword.php">here</a>.</p>
</fieldset>
</form>

<form method="post">
<div>
	Don't have an account? Click <a href="registration.php">here</a> to register.
</div>
</form>

</div>
</body>
</html> 