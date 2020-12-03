<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
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
<?php


require_once('dbConnection.php');
    
if(isset($_POST['submit'])) { 

  $pass1 = "$_POST[password]";
  $pass2 = "$_POST[repeat_password]";

  if($pass1 == $pass2)
  {
    $query = "insert into users (name,phone,address,username,email,password) values ('$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[username]','$_POST[email]','$_POST[password]')";
    $query_run = mysqli_query($conn, $query);
    if(!$query_run)
    {
      echo "User details could not be added due to some error, Please try with different approach";
    }    
    else
    { 
      if(isset($_POST['submit']))
      {
        header("Location: user.php");
      }
    }
  } 
  else {
    echo "Password doesn't match";
  }
  mysqli_close($conn);
}
?>         
    </head> 

<body>

<form action="register.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr> 

    <!-- <form action="register.php" method="post"> -->
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      
      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="Enter Phone No" name="phone" required>

      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>
      
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>


      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repeat_password" required>

      
    <!--</form>
     -->
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label> -->
    
    <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

    <div class="clearfix">
      <button type="button" class="cancelbtn" onclick="window.location.href='./index.php';">Cancel</button>
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>