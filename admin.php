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
input[type=url] { 
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
  <a class="active" href="./admin.php">View Users</a> 
  <a href="./blacklist.php">Add to Blacklist</a> 
  <a href="./addwords.php">Add Words</a> 
  <a href="./viewurls.php">View List</a> 
  <a href="./viewfeedbacks.php">View Feedback</a> 
  <a href="./change_password.php">Change Password</a> 
  <a href="./index.php">Logout</a>
</div>
<h1><center>USERS LIST</center></h1></body>
  <table>
      <tr>
        <th>Name</th>
        <th>Phone</th> 
        <th>Email</th>
      </tr>
      <?php
        require_once("dbConnection.php");
        $query = "select * from users";
        $query_run = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
      </tr>
      <?php 
  }
?>
  </table>


</body>
</html> 