<php
 ob_start();
 session_start();
 $_POST = $_SESSION;
 require_once 'dbconnect.php';
 if (!isset($_SESSION['user'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: home.php");
 }
 
 if (isset($_GET['logout'])) {
//echo "hello";
//print_r($_SESSION);

  date_default_timezone_set('Asia/Kolkata');
  $oDate = date('Y-m-d H:i:s');
  $re=mysql_query("SELECT MAX(sl_no) FROM logs WHERE userId=".$_SESSION['user']);
  $uRow=mysql_fetch_array($re)or die(mysql_error());
  $sno = $uRow[0];
  $qu = "UPDATE logs SET out='$oDate' WHERE sl_no='$sno'";
  $qu2 = "UPDATE logs SET status= 0 WHERE sl_no='$sno'";
 // $r = mysql_query($qu)or die(mysql_error());


  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }
 >