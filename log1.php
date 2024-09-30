<html>
<head>
	<link rel="stylesheet" href="log.css">
	<link href="https://fonts.googleapis.com/css2?
    family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php
	include("conn.php");
	session_start();
if(isset($_POST['login']))
{
	$uname=$_POST['uname'];
	$pword=$_POST['pword'];
	$select="select uname,password from admin_account";
	$rs=mysqli_query($con, $select);
	while($row=mysqli_fetch_array($rs))
	{
		if(($uname==$row['uname'])and($pword==$row['password']))
		{
			setcookie('uname',$uname, time()+60);
			$_SESSION['uname']=$uname;
			header('location:main.php');
		}
	}
		echo '<script type="text/javascript">alert("Incorect combination of username and pasword!")</script>';
}
?>

	<div class="container"><center>
	<div class="navbar">
            <img src="Windscribe.png" alt="logo" class="logo">
            <nav>
                <ul>
                <li><a href="log_in.php">HOME</a></li>
                    <li><a href="login.php">CUSTOMER LOGIN</a></li>
                    <li><a href="log_in.php">BACK</a></li>
                </ul>
            </nav>
			<img src="menu.png" alt="options" class="menuicon">
		</div>
        <div class="cont">
        <fieldset><fieldset><fieldset>
            <div class="content">
            <legend><h2>LOGIN</h2></legend>
	<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post">
		<input type="text" name="uname" placeholder="Enter user name"><br><br><br>
		<input type="password" name="pword" placeholder="Enter pasword"><br><br>
		<p>Don't have an account? <a id="sign" href="sign1.php">SignUp</a> as an Admin</p>
		<input class="black" type="submit" name="login" value="Login">
		<input class="black" type="reset" name="clear" value="Clear">
        </div>
		</fieldset></div>
</fieldset></fieldset>
</div>
	</center>
        </div>
	</form>
</div>

<footer>
        <div class="container1">
            <div class="row1">
                <div class="footcol">
                    <h4>Medicana</h4>
                    <ul>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Working Hours</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Accepted payment methods</a></li>
                    </ul>
                </div>
                <div class="footcol">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Ask Professionals</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footcol">
                    <h4>Online Sale</h4>
                    <ul>
                        <li><a href="#">Drugs</a></li>
                        <li><a href="#">Payment Status</a></li>
                        <li><a href="#">Authorized</a></li>
                        <li><a href="#">Discounts</a></li>

                    </ul>
                </div>
                <div class="footcol">
                    <h4>Follow Us</h4>
                    <div class="sociallink">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr align="center">
            <p align="center" class="pp">copyright &#169 2023</p>
        </div>
    </footer>
</body>

</html>
