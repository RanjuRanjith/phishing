<!DOCTYPE html> 
<html> 
<style> 
	/*set border to the form*/ 
	
	form { 
		border: 3px solid #f1f1f1; 
	} 
	/*assign full width inputs*/ 
	
	input[type=text], 
	input[type=password] { 
		width: 100%; 
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
	} 
	/*set a style for the buttons*/ 
	
	button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 14px 20px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	/* set a hover effect for the button*/ 
	
	button:hover { 
		opacity: 0.8; 
	} 
	/*set extra style for the cancel button*/ 
	
	.cancelbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336; 
	} 
	/*centre the display image inside the container*/ 
	
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	/*set image properties*/ 
	
	img.avatar { 
		width: 10%; 
		border-radius: 20%; 
	} 
	/*set padding to the container*/ 
	
	.container { 
		padding: 16px; 
	} 
	/*set the forgot password text*/ 
	
	span.psw { 
		float: right; 
		padding-top: 16px; 
	} 
	/*set styles for span and cancel button on small screens*/ 
	
	@media screen and (max-width: 200px) { 
		span.psw { 
			display: block; 
			float: none; 
		} 
		.cancelbtn { 
			width: 100%; 
		} 
	} 
</style> 

<body> 

	<h2>Login Form</h2> 
	<form action="#" method="POST"> 
		<div class="imgcontainer"> 
			<img src= "user.jpg"
				alt="Avatar" class="avatar"> 
		</div> 

		<div class="container"> 
			<label><b>Username</b></label> 
			<input type="text" placeholder="Enter Username" name="username" required> 

			<label><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="password" required> 

			<button type="submit" name="submit">Submit</button> 
			<!-- <input type="checkbox" checked="checked"> Remember me  -->
		</div> 
           <!-- <a href="./home.php" class="btn btn-work"><h2>Login</h2></a> -->
           <a href="./register.php" class="btn btn-work"><h2>Sign Up</h2></a> 
           <a href="./index.php" class="btn btn-work"><h2>Home Page</h2></a> 
		<!-- <div class="container" style="background-color:#f1f1f1"> 
			<button type="button" class="cancelbtn">Cancel</button>  
		</div>  -->
	</form>

<?php
include_once("dbConnection.php");
session_start();
if(isset($_POST['submit']))
{
	$query = "select * from users where username = '$_POST[username]'";
	$query_run = mysqli_query($conn, $query);
	while($row = mysqli_fetch_assoc($query_run))
	{
		if($row['username'] == $_POST['username'])
		{
			if($row['password'] == $_POST['password'])
			{
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['name'];
				header("Location: user.php");
			}
			else
			{
				// echo "Wrong Password";
				//$flag = 1;
				break;
			}
		}
		if($row['username'] == "admin")
		{
			$query = "select * from users where username = 'admin'";
			$query_run = mysqli_query($conn, $query);
			$new_row = mysqli_fetch_assoc($query_run);			
			if($new_row['password'] == $_POST['password'])
			{
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['name'];
				header("Location: admin.php");
			}
			else
			{
				// echo "Wrong Password";
				//$flag = 1;
				break;
			}
		}
	}
	echo "Either the username or password entered is wrong";
}

?> 

</body> 

</html> 