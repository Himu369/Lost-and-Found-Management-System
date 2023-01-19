<?php
$db_user="root";
$db_host="localhost";
$db_password="";
$db_name="fbccl_db";

//connecting to mysql database
$con=new mysqli($db_host,$db_user,$db_password,$db_name);
//print error msg if connection is not successful

if($con->connect_error>0)
{
	 die('unable to connect to database['. $con->connect_error. ' ] ');
}
$select=mysqli_select_db($con,$db_name);
if(!$select)
{
	echo
	'sorry could not select database';
}
?>