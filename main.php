<html>

<head>
	<link rel="stylesheet" href="log.css">
	<link href="https://fonts.googleapis.com/css2?
    family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

	<div class="container">
		<center>
			<div class="navbar">
				<img src="Windscribe.png" alt="logo" class="logo">
				<nav>
					<ul>
					<li><a href="log_in.php">HOME</a></li>
						<li><a href="login.php">CUSTOMER LOGIN</a></li>
						<li><a href="log1.php">BACK</a></li>
					</ul>
				</nav>
				<img src="menu.png" alt="options" class="menuicon">
			</div>
			<div class="cont">
				<fieldset><fieldset><fieldset>
					<div class="content">
<?php
if(isset($_COOKIE['uname'])){


session_start();
echo ("<h2><center>Welcome!! " . $_SESSION['uname']."..." . "</center></h2>");
?>


						<legend>
							<h3>What do you want to do <?php echo $_SESSION['uname']."?";?></h3><br><br>
						</legend>
     
        <a href="add.php">Add new medicine</a><br><br>
        <a href="view.php">View medicine details</a><br><br>
        <a href="update.php">Update medicine details</a><br><br>
        <a href="delete.php">Delete medicine details</a><br><br>
        </div>
				</fieldset>
				</fieldset>
				</fieldset>
			</div>
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
<?php
}
else{
    header('location:log1.php');
}
?>