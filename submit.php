<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>"You finished the Survey!"</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/survey.css">
</head>
<body>
	<p>Herllo<p>
	<?php echo "Answer 1 :".$_POST['q1']; 
	echo "Answer 2 :".$_POST['q2']; 
	echo "Answer 3 :".$_POST['q3']; 
	echo "Answer 4 :".$_POST['q4']; 
	echo "Answer 5 :".$_POST['q5']; 
	echo "Answer 6 :".$_POST['q6']; 
	echo "Answer 7 :".$_POST['q7']; 
	echo "Answer 8 :".$_POST['q8']; 
	echo "Answer 9 :".$_GET['q9']; 
	echo "Answer 10 :".$_GET['q10']; ?>
</body>
</html>