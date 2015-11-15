<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>"You are doing the Survey!"</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/survey.css">
</head>
<body>
	<header>
		<h1>CAT CAT CITY</h1>
		<div class="nav">
			<ul>
				<li><a href="index.html" class="index">Home</a></li> |
  				<li><a href="about.html" class="about">About</a></li>
			</ul>
		</div>
		<div class="form-information">
		<div style="width:325px; margin-left: 50px;">
		<p>Start the Survey below:</p>
		<form action="submit.php" action=POST">
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #1</p>
		<p style="width:325px">Charmander, Squirtle or Bulbasur?<p><form style="width:325px" action="submit.php" name="q1" method="POST">
			<input type="radio" name="q1" value="Charmander">Charmander<br>
			<input type="radio" name="q1" value="Squirtle">Squirtle<br>
			<input type="radio" name="q1" value="Bulbasur">Bulbasur
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #2</p>
		<p style="width:325px">What food out of the selection would you choose?<p>
			<input type="radio" name="q2" value="Pizza">Pizza<br>
			<input type="radio" name="q2" value="Apples">Apples<br>
			<input type="radio" name="q2" value="Lasagna">Lasagna<br>
			<input type="radio" name="q2" value="Carrots">Carrots
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #3</p><form style="width:325px" action="submit.php" name="q3" method="POST">
			<input type="radio" name="q3" value="0111 1101">0111 1101<br>
			<input type="radio" name="q3" value="0xFFFFF5">0xFFFFF5<br>
			<input type="radio" name="q3" value="PI">PI<br>
			<input type="radio" name="q3" value="Integer.MAX_VALUE">Integer.MAX_VALUE
		</div>
		</br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #4</p>
		<p style="width:325px">Which form of Spaghetti is best?<p><form style="width:325px" action="submit.php" name="q4" method="POST">
			<input type="radio" name="q4" value="Crystalized">Crystalized<br>
			<input type="radio" name="q4" value="Frozen">Frozen<br>
			<input type="radio" name="q4" value="Edible">Edible<br>
			<input type="radio" name="q4" value="Papyrus">Made by Papyrus
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #5</p>
		<p style="width:325px">How do you feel about meeting new people?<p><form style="width:325px" action="submit.php" name="q5" method="POST">
			<input type="radio" name="q5" value="Great">It's Great!<br>
			<input type="radio" name="q5" value="Hate">I hate people!<br>
			<input type="radio" name="q5" value="OK">Eh, it's ok<br>
			<input type="radio" name="q5" value="Neutral">I'm completely neutral.
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #6</p>
		<p style="width:325px">What is the antiderivative of 1/x?<p><form style="width:325px" action="submit.php" name="q6" method="POST">
			<input type="radio" name="q6" value="Lost">You lost me at "antiderivative"<br>
			<input type="radio" name="q6" value="ln(x)">ln(x)<br>
			<input type="radio" name="q6" value="sin(x)">sin(x)<br>
			<input type="radio" name="q6" value="No">NO NOT MATH
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #7</p>
		<p style="width:325px">Musical instrument you like the most out of the ones listed?<p>
			<input type="radio" name="q7" value="Clarinet">Clarinet<br>
			<input type="radio" name="q7" value="Piano">Piano<br>
			<input type="radio" name="q7" value="Electric guitar">Electric guitar<br>
			<input type="radio" name="q7" value="Ocarina">Ocarina
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #8</p>
		<p style="width:325px">Favorite Mario character out of the ones listed?<p>
			<input type="radio" name="q8" value="Luigi">Luigi<br>
			<input type="radio" name="q8" value="Bowser">Bowser<br>
			<input type="radio" name="q8" value="Toad">Toad<br>
			<input type="radio" name="q8" value="Daisy">Daisy
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #9</p>
		<p style="width:325px">I never leave my home without...<p>
			<input type="radio" name="q9" value="Phone">My phone<br>
			<input type="radio" name="q9" value="Lasagna">Lasagna<br>
			<input type="radio" name="q9" value="Lasagna_Phone">My lasagna phone<br>
			<input type="radio" name="q9" value="Chapstick">Chapstick
		</div>
		<br>
		<div style="display:block; border-style:solid; background-color:#ffb3b3;">
		<p style="width:325px">Question #10</p>
		<p style="width:325px">At parties I...<p>
			<input type="radio" name="q10" value="Dance">Dance by myself<br>
			<input type="radio" name="q10" value="Corner">Hide in a corner<br>
			<input type="radio" name="q10" value="Social">Socialize!!<br>
			<input type="radio" name="q10" value="Leave">Immediately leave the party
		</div>
		<br>
		<input type="submit">
		<!-- <button onclick="location.href = 'submit.html';" id="myButton" class="float-left submit-button" >Click to Submit!</button> -->
		</form>
		</div>
		</div>
		<br>
	</header>
</body>
</html>
