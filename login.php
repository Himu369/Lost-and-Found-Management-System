<?php
 include('connection.php')
?>

<?php
if (isset ($_POST['sign_in']))
{
	$user_name=$_POST['uname'];
	$sql="select* from fbccl_db where user_id='".$_POST['uname']."' and  E_password='".$_POST['psw']."'";
	$query=mysqli_query($con,$sql);
	$fetch=mysqli_num_rows($query);
	//$val=mysqli_fetch_row($query);
	//$Phone_no=$val[3];
	//echo $Phone_no;

if($fetch==0)
{ echo'user doesnot exist';
}
else
{
	session_start();
   $_SESSION['NAME']=$_POST['uname'];
echo"<script>document.location='fwelcome.php'</script>";

}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BCCL LOGIN</title>
		<link rel="stylesheet" type="text/css" href="stylecss.css"/>
        
        
    </head>
    <body background="fbcclphoto.jfif">
        <nav>
		<img src="bccllogo1-1.png"/>
		<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
	    <li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Exit</a></li>
	    </ul>
		</nav>
        <br>
        <div>
        <table border="1" width="500" cellspacing="3" cellpadding="20" align="center">
           <tbody>
                <tr>
                    <td>
                        <form method='POST'>
                            <div id="logo">       
                             
                              <img src="bccllogo1-1.png" alt="" weight="100" height="100"/></div>
                            <br><br><br>
           
            <label margin="5">Enter Your Email Id &nbsp;&nbsp;&nbsp;</label> 
            <input type="text" name="uname" value="" placeholder="Enter email " margin="5" accesskey="   " required=""/>
            
            <br>
            <br>
            <label>Enter Password Here &nbsp;</label>
            <input type="password" name="psw" value="" placeholder="Enter password"  />
            <br>
           
            <br>
           <br><!-- comment -->
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           
           <button type="submit" name="sign_in">SIGN IN</button> 
           <br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you haven't an account Please <a href="registration.php">Register now.</a>
           <br>
           <hr>
                        </form>
                   </td>
                </tr>
            </tbody>
        </table>
</div>   
    </body>
</html>
