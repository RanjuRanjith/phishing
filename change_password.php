<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 8px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 14%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
input[type=word] { 
    width:50%; 
    padding: 12px 20px; 
    margin: 15px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    box-sizing: border-box;
    text-align: center; 
  } 
  .container {
  height: 200px;
  position: relative;
  border: 3px solid green;
  width:100%;
}

.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%; 
  left: 40%;
  place-items: center;
  -ms-transform: translateY(-50%);
  transform: translateY(-40%);
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
<div class="navbar">
  <a href="./admin.php">View Users</a> 
  <a href="./blacklist.php">Add to Blacklist</a> 
  <a href="./addwords.php">Add Words</a> 
  <a href="./viewurls.php">View List</a> 
  <a href="./viewfeedbacks.php">View Feedback</a> 
  <a class="active" href="./change_password.php">Change Password</a> 
  <a href="./index.php">Logout</a>
</div>
<h1><center>CHANGE PASSWORD FOR ADMIN</center></h1></body>
<div class="container">
<div class="vertical-center"> 
<form method="POST" action="change_password.php">
      <label for="oldPassword"><b><center>Old Password</center></b></label>
       <input type="text" id="passwords" placeholder="Enter Previous Password" name="old_password" required><br><br>
      <label for="newPassword"><b><center>New Password</center></b></label>
      <input type="text" id="passwords" placeholder="Enter New Password" name="new_password" required><br><br>
      <center><input type="submit" value="Update" name="submit"></center>
      </form>
    </div>
  </div>

<?php
require_once("dbConnection.php");
session_start();
if(isset($_POST['submit'])) {  
  $query = "SELECT * from users WHERE username = 'admin'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if ($_POST["old_password"] == $row["password"]) {
    $update_query = "UPDATE users set password='" . $_POST["new_password"] . "' WHERE username = 'admin'";
    mysqli_query($conn, $update_query); 
    echo nl2br("\n Password Changed");
  } else {
    echo "Current Password is not correct";
  }
}
?>
 


</body>
</html> 