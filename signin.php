<html>
<head> <title> SIGN IN | LEARNER'S LICENSE HELPER </title> </head>
<h1> 
<B> <center> LEARNER'S LICENSE HELPER </center> </B>
</h1>
<body style="Background-color: lightblue ">
<center>
<img src = "signin.png" style="width:300px;height=300px" alt = "Picture loading failed. Check your internet connection">
<h3>
<p style="color:blue"> <B>
Learning to drive gives many a hard experience. A driving license is a mandatory document issued by the Government of India to allow a vehicle owner to operate his vehicle on roads. This website helps to procure a learner's license in an easy way. <br>
It contains information for applying to a learner's license such as documents required, eligibility criteria, etc. It not only provides information,  but also helps you prepare for it by providing practice questions and conducting mock exams similar to the mcq exam conducted by License Authorities. <br>
An individual can also apply for the learner's license through this website as user can visit to the government's official license application website. <br> <br> 
Please Sign In to use these facilities.Thank You!! </B> </p>
Sign-in Here :
</h3>
<form method="post">
Enter Username : <br>
<input type = "text" placeholder = "Username" name = "usr" required> <br> <br>
Enter Password : <br>
<input type = "password" placeholder = "Password" name = "pwd" required> <br> <br>
Reset The Fields : <br>
<input type = "RESET" value = "Reset" style="font-weight:bold"> <br> <br>
Click Below To Sign In : <br>
<input type = "SUBMIT" name= "signin" value ="Sign In" style="font-weight:bold"> <br> <br> </form>
<?php
$user = $_POST['usr'];
$pwd = $_POST['pwd'];
if(isset($_POST["signin"])) {
$servername = "localhost";
$username = "root";
$password = "sept@1998#";
$dbname="LearnerLicense";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM Users WHERE Username='".$user."' AND Password='".$pwd."'";
$result = $conn->query($sql);
$result=$conn->query($sql);
if($result->num_rows == 0) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signin Error\nUsername or Password is wrong");}
</script>';
}
else {
header( "Location:home.php" );
}
mysqli_close($conn);
}
?>
<h3> Not Registered?? Sign Up By Clicking Below </h3>
<a href="signup.php">Sign Up</a>
</center>
</body>
</html>
