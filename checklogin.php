<?php
session_start();
$host="localhost";
$username="";
$password="";
$dbname= "test";
$tblname= "login";
$con=mysqli_connect($host,$username,$password,$dbname)or die("cannot connect");
$select_db=mysqli_select_db ($con,$dbname)or die ("cannot select db");
if(isset($_POST['myusername']) && isset($_POST['mypassword']))
{
	$usrnm=$_POST['myusername'];
	$pswd=$_POST['mypassword'];
	$ab="SELECT * FROM login WHERE username='$usrnm' AND password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{
		header('Location:search.php');
	}
	else
	{
		echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}
ob_end_flush();
?>
