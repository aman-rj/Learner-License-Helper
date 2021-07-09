<html>
<head> <title> MCQ-EXAM | LEARNER'S LICENSE HELPER </title> </head>
<body style="background-color:lavender">
<center>
<h1> MCQ-EXAM | LEARNER'S LICENSE HELPER &ensp; &ensp; &ensp; &ensp; &ensp; </h1>
</center>
<br>
<br>
<center>
<table width="75%">
<tr>
<td>
<a href="practice.html" target="_blank"> <H2> <I> <U> Practice Q's </U> </I> </H2> </a>
</td>
<td>
<?php
$files = array('exam1.php','exam2.php','exam3.php');
$index = array_rand($files);
echo '<a href='.$files[$index].' target="_blank" onClick="myFunction()"> <H2> <I> <U> Mock Exam </U> </I> </H2> </a>';
echo '<script>';
echo 'function myFunction() { location.reload(); }';
echo '</script>';
?>
</td>
</tr>
<tr>
<td>
<img src="practice.jpg" style="width:400px;height=400px" alt = "Picture loading failed. Check your internet connection">
</td>
<td>
<img src="mock_exam.png" style="width:200px;height=200px" alt = "Picture loading failed. Check your internet connection">
</td>
</tr>
<tr>
<td>
<h3>
<ul>
Provides : 
<li> Information about different road signs. </li>
<br>
<li> List of Questions and Answers. </li>
<br> <br> <br> <br> <br> <br> <br>
</ul>
</h3>
</td>
<td>
<h3>
<ul style="square">
Instructions : 
<li> Questions related to rules and regulations of traffic, and traffic signs are included in the test</li>
<br>
<li> 10 questions will be asked at random, must answer alteast 6 questions correctly to pass the test. </li>
<br>
<li> 5 mins will be provided to answer all the questions. </li>
<br>
</ul>
</h3>
</td>
</tr>
</table>
</center>
</body>
</html>
