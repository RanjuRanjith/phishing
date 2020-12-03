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
        <link rel = "icon" href = "logo.jfif" type = "image/x-icon"> 


   
    </head> 

<body>
<div class="navbar">
  <a href="./admin.php">View Users</a> 
  <a href="./blacklist.php">Add to Blacklist</a> 
  <a class="active" href="./addwords.php">Add Words</a> 
  <a href="./viewurls.php">View List</a> 
  <a href="./viewfeedbacks.php">View Feedback</a> 
  <a href="./change_password.php">Change Password</a> 
  <a href="./index.php">Logout</a>
</div>
<h1><center>ADD WORDS</center></h1>

<div>
<?php
        
        require_once('dbConnection.php');
    
    if(isset($_POST['submit'])) { 
          
          $query = "insert into word (words) values ('$_POST[word]')";
          $query_run = mysqli_query($conn, $query);
          if(!$query_run)
          {
            echo "Word could not be added due to some error, Please try with different approach";
          }
          mysqli_close($conn);
        }
        
      ?>
</div>

<div class="container">
    <div class="vertical-center">
      <form action="addwords.php" method="post">
        <label for="word"><b><center><h3>Enter words</h3></center></b></label> 
        <input type="word" id="words" placeholder="Enter word" name="word" required >
        <input type="submit" name="submit">
      </form>      
    </div>
  </div>
</body>
</html> 