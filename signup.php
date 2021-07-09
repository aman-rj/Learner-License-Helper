<html>
<head> <title>  SIGN UP | LEARNER'S LICENSE HELPER </title> </head>
<h1>
<B> <center> LEARNER'S LICENSE HELPER </center> </B>
</h1>
<body style="background-color:lightgrey">
<center>
<h3>
<table border="1">
<tr> <th><h2>Rules :</h2></th> </tr>
<tr> <td>
<h3>
1. All fields must be filled properly. No field should remain empty. <br>
2. Password must be atleast 5 characters and atmost 10 characters. <br>
3. An individual below 16 years of age is not permitted to use this website. <br>
</h3>
</td> </tr>
</table>
<br> <br>
Sign-up Here :
<h3>
<form method="post">
<table>
<tr>
<td> <B>Enter Name :</B> </td>
<td> <input type = "text" placeholder = "Name" name = "nm" required> </td>
</tr> 
<tr>
<td> <B>Enter D.o.B :</B> </td>
<td> <input type = "date" placeholder = "D.O.B" name = "dob" required> </td>
</tr>
<tr>
<td> <B>Create Username :</B> </td>
<td> <input type ="text" placeholder = "Username" name = "usr" required> </td>
</tr>
<tr>
<td> <B>Enter Password :</B> </td>
<td> <input type = "password" placeholder = "Password" name = "pwd" minlength="5" maxlength="10" required> </td>
</tr>
<tr>
<td> <B>Re Enter Password :</B> </td>
<td> <input type = "password" placeholder = "Re Enter Password" name = "pwd1" minlength="5" maxlength="10" required> </td>
</tr>
</table>
<br> <br>
<input type = "SUBMIT" name="signup" value = "Sign Up" style="font-weight:bold">
<input type = "RESET" value = "Reset" style="font-weight:bold">
<br> <br>
</form>
Return To Sign-In Page <br>
<a href="signin.php">Click Here</a>
</center>
<?php
$name=$_POST['nm'];
$dob=$_POST['dob'];
$user=$_POST['usr'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];
$today=time();
$bday=strtotime($dob);
if(isset($_POST["signup"])) {
$diff=(int)(($today-$bday)/31536000);
if($diff<16) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error\nYour age is below 16. Hence, not permitted to register.");}
</script>';
}
else if($pwd!=$pwd1) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error\nPasswords does not match. Enter again");}
</script>';
}
else {
$servername = "localhost";
$username = "root";
$password = "sept@1998#";
$dbname="LearnerLicense";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql= "SELECT * FROM Users WHERE Username='".$user."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Error....\nUsername already exists. Try another");}
</script>';
}
else {
echo '<script type="text/javascript"> window.onload=function() { alert("Signup Success\nYou are successfully signed up");}
</script>';
$sql = "INSERT INTO Users VALUES ( '".$name."','".$dob."','".$user."','".$pwd."')";
echo mysqli_query($conn, $sql);
mysqli_close($conn);
}
}
}
?>
</body>
</html>
