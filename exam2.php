<html>
<head> <title> MOCK EXAM | LEARNER'S LICENSE HELPER </title> </head>
<body style="background-color:thistle">
<center>
<H2>
<B> <I> Let's test your knowledge </I> </B> </H2>
<?php
echo '<script type="text/javascript"> window.onload=function() { alert(" Submit your answers within 5 minutes!!!\nClick OK to Start the test");} </script>';
?>
</center>
<br>
<br>
<script type="text/javascript">
// set minutes
var mins = 5;
 
// calculate the seconds (don't change this! unless time progresses at a different speed for you...)
var secs = mins * 60;
function countdown() {
	setTimeout('Decrement()',1000);
}
function Decrement() {
	if (document.getElementById) {
		minutes = document.getElementById("minutes");
		seconds = document.getElementById("seconds");
		// if less than a minute remaining
		if (seconds < 59) {
			seconds.value = secs;
		} else {
			minutes.value = getminutes();
			seconds.value = getseconds();
		}
		secs--;
		if(!(minutes.value==0 && seconds.value==0))
            	setTimeout('Decrement()',1000);
		else
		{
		var r=confirm("Timed Out!! \n Try Again ??");
		if(r==true)
		window.location.reload();
		}

	}
}
function getminutes() {
	// minutes is seconds divided by 60, rounded down
	mins = Math.floor(secs / 60);
	return mins;
}
function getseconds() {
	// take mins remaining (as seconds) away from total seconds remaining
	return secs-Math.round(mins *60);
}
</script>
</head>
<body>
 
<div align="right" id="timer">
	<input id="minutes" type="text" style="width: 14px; border: none; background-color:none; font-size: 16px; font-weight: bold;"> minutes and <input id="seconds" type="text" style="width: 26px; border: none; background-color:none; font-size: 16px; font-weight: bold;"> seconds.
</div>
<script>
countdown();
</script>

<B>
<form method="post">
<div class="section">
<p style="color:blue"> Q1. How can you distinguish a transport vehicle</p>
<br>
<input type="radio" name="a" value="A"> By looking at the tyre size <br>
<input type="radio" name="a" value="B"> By colour of the vehicle <br>
<input type="radio" name="a" value="C"> By looking at the number plate of the vehicle <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q2. Maximum permissible speed of autorickshaws on ghat road </p>
<br>
<input type="radio" name="b" value="A"> 30 km/hour <br>
<input type="radio" name="b" value="B"> 20 km/hour <br>
<input type="radio" name="b" value="C"> 40 km/hour <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q3.The following sign represents </p>
<img src="Steep_descent.svg" style="width:80px;height:80px">
<br>
<input type="radio" name="c" value="A"> Steep ascend  <br>
<input type="radio" name="c" value="B"> Steep descend <br>
<input type="radio" name="c" value="C"> Slippery road <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q4. The following sign represents </p>
<img src="fallingrocks.png" style="width:80px;height:80px">
<br>
<input type="radio" name="d" value="A"> Rough road  <br>
<input type="radio" name="d" value="B"> Slippery road <br>
<input type="radio" name="d" value="C"> Falling rocks <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q5. A flashy yellow signal is used means </p>
<br>
<input type="radio" name="e" value="A"> traffic lights aren't working <br>
<input type="radio" name="e" value="B"> you should slow down and proceed with caution <br>
<input type="radio" name="e" value="C"> men are at work <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q6. The following sign represents </p>
<img src="school-ahead.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="f" value="A"> School Ahead <br>
<input type="radio" name="f" value="B"> Pedestrians crossing <br>
<input type="radio" name="f" value="C"> Pedestrians crossing prohibited <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q7. Minimum age for getting a license to drive motor cycle without gear</p>
<br>
<input type="radio" name="g" value="A"> 18 years <br>
<input type="radio" name="g" value="B"> 21 years <br>
<input type="radio" name="g" value="C"> 16 years <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q8. The following sign represents </p>
<img src="leftrevbend.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="h" value="A"> Righr reverse bend <br>
<input type="radio" name="h" value="B"> Left reverse band <br>
<input type="radio" name="h" value="C"> Turn left and go ahead <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q9. The following sign represents </p>
<img src="slippery-road.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="i" value="A"> Slippery road <br>
<input type="radio" name="i" value="B"> Gravel road <br>
<input type="radio" name="i" value="C"> No entry for motor car <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q10. What is "Tail Gating"? </p>
<br>
<input type="radio" name="j" value="A"> Driving too close behind a vehicle in a dangerous manner <br>
<input type="radio" name="j" value="B"> Keeping safe distance from the vehicle ahead regulating the speed proportionality <br>
<input type="radio" name="j" value="C"> keeping a distance of at least 7 metres from the vehicle ahead <br>
<br>
<br>
<center>
<input type="submit" name="submit" value="Submit Answers"/>
</center>
</div>
</form>
<B>
<?php
if(isset($_POST['submit']))
{
$result = 0;
$rstatus = " ";
$a1=$_POST['a'];
$a2=$_POST['b'];
$a3=$_POST['c'];
$a4=$_POST['d'];
$a5=$_POST['e'];
$a6=$_POST['f'];
$a7=$_POST['g'];
$a8=$_POST['h'];
$a9=$_POST['i'];
$a10=$_POST['j'];
$answer = array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10);
$correct = array("C","A","B","C","B","A","C","B","A","A");
for($i=0 ; $i < 10 ; $i++)
{
if($answer[$i] == $correct[$i])
$result++;
}
if($result>=6)
$rstatus = "passed";
else
$rstatus = "failed";
echo '<script type="text/javascript"> window.onload=function() { alert("You '.$rstatus.'.\nMarks : '.$result.'/10.\n \n ->Go To Practice Questions for correct answers & and more practice.\n ->Go To Mock-Exam if you want to give another test");}
		</script>';
}
?>
</center>
</body>
</html>
