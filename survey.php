<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>"You are doing the Survey!"</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<h1>CAT CAT CITY</h1>
		<p>Start the Survey below:</p>
		<form action="" method="post">
		<p>Question #1</p>
		<p>Charmander, Squirtle or Bulbasur?<p>
		<form action="" method="post">
			<input type="radio" name="q1" value="Charmander">Charmander<br>
			<input type="radio" name="q1" value="Squirtle">Squirtle<br>
			<input type="radio" name="q1" value="Bulbasur">Bulbasur
		</form>
		<p>Question #2</p>
		<p>What food aout of the selection would you choose?<p>
		<form action="" method="post">
			<input type="radio" name="q2" value="Pizza">Pizza<br>
			<input type="radio" name="q2" value="Apples">Apples<br>
			<input type="radio" name="q2" value="Lasagna">Lasagna<br>
			<input type="radio" name="q2" value="Carrots">Carrots
		</form>
		<p>Question #3</p>
		<p>Which number is best?<p>
		<form action="" method="post">
			<input type="radio" name="q3" value="0111 1101">0111 1101<br>
			<input type="radio" name="q3" value="0xFFFFF5">0xFFFFF5<br>
			<input type="radio" name="q3" value="PI">PI<br>
			<input type="radio" name="q3" value="Integer.MAX_VALUE">Integer.MAX_VALUE
		</form>
		<p>Question #4</p>
		<p>Which form of Spaghetti is best?<p>
		<form action="" method="post">
			<input type="radio" name="q4" value="Crystalized">Crystalized<br>
			<input type="radio" name="q4" value="Frozen">Frozen<br>
			<input type="radio" name="q4" value="Edible">Edible
		</form>
		<input type="submit" name="submit" value="Get Selected Values" />
		</form>
		<?php
			if(isset($_POST['submit'])) {
			if(isset($_POST['q1'])) {
				echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
			}}
		?>
	</header>
</body>
</html>
