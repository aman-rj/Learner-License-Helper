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
		var r=alert("Timed Out!! \n Try Again.");
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
<p style="color:blue"> Q1. You can overtake a vehicle in front</p>
<br>
<input type="radio" name="a" value="A"> through the right side of that vehicle<br>
<input type="radio" name="a" value="B"> through the left side<br>
<input type="radio" name="a" value="C"> through the left side; if the road is wide <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q2. Mobile phones shall not be used </p>
<br>
<input type="radio" name="b" value="A"> in Government offices <br>
<input type="radio" name="b" value="B"> in Police Stations <br>
<input type="radio" name="b" value="C"> while driving a vehicle <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q3. The following sign represents </p>
<img src="narrow-road.png" style="width:80px;height:80px">
<br>
<input type="radio" name="c" value="A"> Narrow road ahead  <br>
<input type="radio" name="c" value="B"> Narrow bridge ahead <br>
<input type="radio" name="c" value="C"> Roads on both sides ahead <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q4. The following sign represents </p>
<img src="no-entry.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="d" value="A"> Restriction ends  <br>
<input type="radio" name="d" value="B"> No entry <br>
<input type="radio" name="d" value="C"> No overtaking <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q5. The hand brake is to be used </p>
<br>
<input type="radio" name="e" value="A"> to reduce the speed <br>
<input type="radio" name="e" value="B"> to apply sudden brake <br>
<input type="radio" name="e" value="C"> to park a vehicle <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q6. The following sign represents </p>
<img src="pedestrian.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="f" value="A"> Pedestrian crossing <br>
<input type="radio" name="f" value="B"> Pedestrians may enter <br>
<input type="radio" name="f" value="C"> Pedestrians prohibited <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q7. Parking of a vehicle in front of entrance to hospital is </p>
<br>
<input type="radio" name="g" value="A"> proper <br>
<input type="radio" name="g" value="B"> improper <br>
<input type="radio" name="g" value="C"> proper if NO PARKING sign is not provided <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q8. The following sign represents </p>
<img src="give-way.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="h" value="A"> Traffic island ahead <br>
<input type="radio" name="h" value="B"> Give Way <br>
<input type="radio" name="h" value="C"> Hospital ahead <br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q9. The following sign represents </p>
<img src="stop.jpg" style="width:80px;height:80px">
<br>
<input type="radio" name="i" value="A"> Stop <br>
<input type="radio" name="i" value="B"> No parking <br>
<input type="radio" name="i" value="C"> Hospital ahead<br>
<br>
<br>
</div>
<div class="section">
<p style="color:blue"> Q10. Validity of P.U.C.C. Polution Under Control Certificate </p>
<br>
<input type="radio" name="j" value="A"> 6 months <br>
<input type="radio" name="j" value="B"> 1 year <br>
<input type="radio" name="j" value="C"> 2 years <br>
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
$correct = array("A","C","A","B","C","A","B","B","A","A");
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
