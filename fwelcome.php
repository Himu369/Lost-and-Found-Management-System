<?php
session_start();
include ('connection.php');
if (empty($_SESSION['NAME']))
{
header('location:index.php');
}
$session_name=$_SESSION['NAME'];
$sql="select * from fbccl_db where user_id='". $session_name."'";
$query=mysqli_query($con,$sql);
	//$fetch=mysqli_num_rows($query);
	$val=mysqli_fetch_row($query);
	$E_id=$val[2];
	$E_name=$val[3];
	$E_address=$val[4];
	$E_lost_item=$val[5];
	$E_found_item=$val[6];
	
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
		<link rel="stylesheet"type="text/css" href="stylecss.css">
</head>
<body background="background.jfif">
<nav>
		<img src="bccllogo1-1.png"/>
		<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
	    <li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="logout.php">Logout</a></li>
	    </ul>
		</nav>
		
<!--<img src="download (1).png">
<div class="title">
<center><u><h1>WELCOME TO BCCL PAGE</h1></u></center>
</div>

<div class="main">
<ul><b>
<li><a href="index.php">Home</a></li>
<li><a href="Login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li></b>
</ul>
</div>-->
<br>
<table border="1" width="500" cellspacing="3" cellpadding="20" align="center">
           <tbody>
                <tr>
                    <td>
                        
                         <div class="info">
<br>
<br>
<div class="info"><center>
<img src="welcome.png" alt="" height="200" weight="20"/></center>
<ul><b>
<li><a href="#">Employee_id &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="<?php echo $E_id ;?>"></a></li><label></label><br><br>
<li><a href="#">Employee_name&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="<?php echo $E_name; ?>"></</a></li><br><br>
<li><a href="#">Employee_address &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="<?php echo $E_address; ?>"</</a></li><br><br>
<li><a href="#">Employee_lost_item &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="<?php echo $E_lost_item ;?>"></</a></li><br><br>
<li><a href="#">Employee_found_item &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" value="<?php echo $E_found_item ;?>"></</a></li><br><br></b>
</ul>
</div>
 </td>
                </tr>
            </tbody>
        </table>
</body>
</html>