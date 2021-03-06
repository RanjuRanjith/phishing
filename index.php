<!DOCTYPE html> 
<html> 
<style> 
	button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 14px 20px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 50%;
		align-items: center; 
		justify-content: center;
		display: flex;
	} 
	/* set a hover
    button:hover { 
		opacity: 0.8; 
	} 
	/*set extra style for the cancel button*/ 
	
	.loginbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336; 
	} 
	.signupbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336;
	} 
	/*centre the display image inside the container*/ 
	
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	.container {
     height: 200px;
     position: relative;
    }


	/*set image properties*/ 
	
	img.avatar { 
		width: 40%; 
		border-radius: 50%; 
	} 
	/*set padding to the container*/ 

	.vertical-center {
     margin: 50;
     position: absolute;
     top: 50%;
     -ms-transform: translateY(-60%);
     transform: translateY(-70%);
}	 
	
</style> 
<head> 
        <meta charset = "utf-8" /> 
          
        <title> 
             Detection of Phising website
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "logo.jfif" 
        type = "image/x-icon"> 
          
    </head> 


<body> 
	<h2><center>Detection of Phishing website</center></h2> 
		<div class="imgcontainer"> 
			<img src= "logo.jfif"
				alt="Avatar" class="avatar"> 
		</div> 
		<div class="container" style="background-color:#f1f1f1"> 
			<div class="vertical-center">
			<button type="button" class="login" onclick="window.location.href='./login.php';">Login</button> 
			<button type="button" class="signup" onclick="window.location.href='./register.php';">Sign Up</button>
			<button type="button" class="about" onclick="window.location.href='./about.php';">About</button>
			<button type="button" class="contactUs" onclick="window.location.href='./support.php';">Contact Us</button>
		</div>	
		</div> 

</body> 

</html> 
