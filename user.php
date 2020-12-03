<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div.scrollmenu {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 20px;
  text-decoration: none;
  padding-right: 50px;
}

div.scrollmenu a:hover {
  background-color: #777;
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
input[type=url] { 
    width:100%; 
    padding: 12px 20px; 
    margin: 15px 0; 
    display: inline-block; 
    border: 1px solid #ccc; 
    box-sizing: border-box;
    text-align: center; 
  } 
</style>

        <meta charset = "utf-8" /> 
          
        <title> 
             Detection of Phising website
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href = "logo.jfif" 
        type = "image/x-icon"> 
          

</head>
<body>

<div class="scrollmenu">
  <a href="./user.php">User</a>
  <a href="./feedback.php">Feedback</a>
  <!-- <a href="./support.php">Support</a> -->
  <a href="./index.php">Logout</a>

</div>

<h1><center>Check website</center></h1></body>
<div class="container">
<div class="vertical-center"> 
<form method="POST" action="user.php">
      <label for="address"><b><center>Enter URL</center></b></label> 
      <input type="url" id="urls" placeholder="Copy and paste the url here" name="address" required>
      <center><input type="submit" value="Check" name="submit"></center>
      </form>
    </div>
  </div>
 
<?php
include_once("dbConnection.php");

if(isset($_POST['submit']))
{
  $query = "SELECT * FROM admin WHERE url = '" . $_POST["address"] . "' ";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  if($result) {
    if($row["phishing"] == "Yes")
    {
      echo nl2br("\n The Given URL is Phishing");
    }
    else
    {
      echo nl2br("\n The Given URL is Not Phishing");
    }
  }
  else
  {
    echo nl2br("\n The Given URL is Not Added");
  }
}

?>

</body>
</html>