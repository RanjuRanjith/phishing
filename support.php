<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

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
  
  $query = "insert into contact (first_name,last_name,state,country,subject) values ('$_POST[firstname]', '$_POST[lastname]', '$_POST[state]', '$_POST[country]', '$_POST[subject]')";
  $query_run = mysqli_query($conn, $query);
  if(!$query_run)
  {
    echo "Support data could not be added due to some error, Please try with different approach";
  }
  mysqli_close($conn);
}

?>       
    

</head>
<body>

<h2>We Respond as Quick as Blink of an eye!!</h2>
<p>We will resolve your problems with immediate effect.</p>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="support.png" style="width:100%">
    </div>
    <div class="column">
      <form action="support.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="India">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="state">State</label>
        <select id="State" name="state">
          <option value="karnataka">Karnataka</option>
          <option value="mumbai">Mumbai</option>
          <option value="delhi">Delhi</option>
        </select>

        
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" name="submit">
        <input type="button" value="Back" onclick="window.location.href='./index.php';">
      </form>
    </div>
  </div>
</div>

</body>
</html>