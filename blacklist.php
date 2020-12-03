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
/* input[type=url] { 
    width:100%; 
    padding: 12px 2px; 
    margin: 15px 15px; 
    display: inline-block;  
    border: 1px solid #ccc; 
    box-sizing: border-box;
    text-align: center; 
  }  */
  .container {
  height: 300px;
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
        <link rel = "icon" href = "logo.jfif" 
        type = "image/x-icon"> 

        <?php

          require_once('dbConnection.php');

          if(isset($_POST['submit'])) {
            
            $query = "insert into admin (url, phishing) values ('$_POST[url]', '$_POST[phishing]')";
            $query_run = mysqli_query($conn, $query);
            if(!$query_run)
            {
              echo "Black List could not be added due to some error, Please try with different approach";
            }
            mysqli_close($conn);
          }
        
        ?>
          
    </head> 

<body>
<div class="navbar">
  <a href="./admin.php">View Users</a> 
  <a class="active" href="./admin.php">Add to Blacklist</a> 
  <a href="./addwords.php">Add Words</a> 
  <a href="./viewurls.php">View List</a> 
  <a href="./viewfeedbacks.php">View Feedback</a> 
  <a href="./change_password.php">Change Password</a> 
  <a href="./index.php">Logout</a>
</div>
<h1><center>ADD TO BLACKLIST</center></h1></body>
<div class="container">
<div class="vertical-center"> 
    <form action="blacklist.php" method="post">
      <label for="address"><b><center><h3>Enter URL</h3></center></b></label> 
      <input type="url" id="urls" placeholder="Enter Url" name="url" required style="text-align:center;"><br> 
      <label for="address"><b><center><h4>Phishing or Not</h4></center></b></label> 
      <input type="phishing" id="phishing" placeholder="Yes or No" name="phishing" required style="text-align:center;"><br><br>
      <center><input type="submit" name="submit"></center>
    </form>
    </div>
  </div>
 


</body>
</html> 