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
<p style="color:blue"> Q1. All motor vehicles must be covered by</p>
<br>
<input type="radio" name="a" value="A"> Life Insurance<br>
<input type="radio" name="a" value="B"> Third party Insurance<br>
<input type="radio" name="a" value="C"> Comprehensive Insurance <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q2. You hold a learner's license for motor cycle </p>
<br>
<input type="radio" name="b" value="A"> You will drive when the traffic is less <br>
<input type="radio" name="b" value="B"> You will drive the vehicle only when an instructor holding driving license to drive motor cycle accompanies <br>
<input type="radio" name="b" value="C"> You will not carry any other person on the motor cycle except for the purpose of getting instructions from an instructor who holds a valid driving license to drive motor cycle<br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q3. The following sign represents </p>
<img src="light.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="c" value="A"> Light refreshment <br>
<input type="radio" name="c" value="B"> Drinking place <br>
<input type="radio" name="c" value="C"> Eating place <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q4. The following sign represents </p>
<img src="resting_place.gif" style="width:80px;height:80px">
<br>
<input type="radio" name="d" value="A"> Hospital  <br>
<input type="radio" name="d" value="B"> Resting place <br>
<input type="radio" name="d" value="C"> First aid post <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q5. Drunken driving </p>
<br>
<input type="radio" name="e" value="A"> Allowed in private motor vehicles <br>
<input type="radio" name="e" value="B"> Allowed during night time <br>
<input type="radio" name="e" value="C"> Prohibited in all motor vehicles <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q6. The following sign represents </p>
<img src="petrol.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="f" value="A"> ATM <br>
<input type="radio" name="f" value="B"> Petrol Pump <br>
<input type="radio" name="f" value="C"> Toll Stand <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q7. The Driver shall carry the following documents, while driving in public place </p>
<br>
<input type="radio" name="g" value="A"> Registration Certificate, G.C.R., Insurance Certificate <br>
<input type="radio" name="g" value="B"> Registration Certificate, Insurance Certificate, Tax Token, Driving License <br>
<input type="radio" name="g" value="C"> Registration Certificate, Permit, Trip Sheet <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q8. The following sign represents </p>
<img src="parkingscomot.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="h" value="A"> Parking lot - scooters and motor cycles <br>
<input type="radio" name="h" value="B"> Scooters and motor cycles prohibited <br>
<input type="radio" name="h" value="C"> Scooters and motor cycles repairing <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q9. The following sign represents </p>
<img src="firstaid.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="i" value="A"> First aid post <br>
<input type="radio" name="i" value="B"> Resting place <br>
<input type="radio" name="i" value="C"> Hospital<br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q10. When a vehicle approaches an unguarded railway level crossing, before crossing it, the driver shall </p>
<br>
<input type="radio" name="j" value="A"> Stop the vehicle on the left side of the road, get down from the vehicle, go to railway track, and ensure that no train or trolley is coming from either side <br>
<input type="radio" name="j" value="B"> Sound horn and across the track as fast as possible <br>
<input type="radio" name="j" value="C"> Wait till the train passes <br>
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
$correct = array("B","C","A","B","C","B","B","A","A","A");
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
