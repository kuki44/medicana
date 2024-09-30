<?php
if(isset($_COOKIE['uname'])){
include("conn.php");
?>
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
                        <li><a href="main.php">BACK</a></li>
                    </ul>
                </nav>
                <img src="menu.png" alt="options" class="menuicon">
            </div>
            <div class="cont">
                <fieldset>
                    <fieldset>
                        <fieldset>
                            <div class="content">
                                <legend>
                                    <h2>Enter the updated infos:</h2>
                                </legend>
                                <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">

                                    <input type="text" name="medid" placeholder="Enter old med ID" required><br><br>
                                    <input type="text" name="medcat" placeholder="Enter new med catagory" required><br><br>
                                    <input type="text" name="name" placeholder="Enter new med name" required><br><br>
                                    <input type="text" name="price" placeholder="Enter new med price" required><br><br>
                                    <input type="text" name="count" placeholder="Enter new med count" required><br><br>

                                    <input class="black" type="submit" name="update" value="update">
                                    <input class="black" type="reset" name="clear" value="Clear">


                                    <?php

                                    if (isset($_POST['update'])) {
                                        $medid = $_POST['medid'];
                                        $select = "select * from med_info";
                                        $rs = mysqli_query($con, $select);
                                        $count = mysqli_num_rows($rs);
                                        if ($count > 0) {
                                            $sql = "SELECT * FROM med_info WHERE medid='$_POST[medid]'";
                                            $result = mysqli_query($con, $sql);
                                            $count2 = mysqli_num_rows($result);
                                            if ($count2 > 0) {
                                                $query = "UPDATE med_info SET medcat = '$_POST[medcat]', name='$_POST[name]',price ='$_POST[price]',count ='$_POST[count]'  
WHERE medid='$_POST[medid]' ";
                                                $result = mysqli_query($con, $query);
                                                if ($result) {
                                                    echo '<script type="text/javascript">alert("Medicine Record Updated Successfully!!!")</script>';
                                                } else {
                                                    echo '<script type="text/javascript">alert("Couldn\'t Update Record!!!")</script>';
                                                }
                                            } else {
                                                echo "<br>" . '<script type="text/javascript">alert("No such record!!!")</script>';
                                            }
                                        } else {
                                            echo "<br>" . '<script type="text/javascript">alert("Record is empty!!!")</script>';
                                        }
                                    }
                                    mysqli_close($con);
                                    ?>

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
} else {
	echo '<script type="text/javascript">alert("Session has expired! Login again")</script>';
	header('location:log1.php');
} ?>