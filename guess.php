<html>
<body>
<title>Priyanka Singh df81dd7f</title>
<h1>Welcome To My Guessing Game</h1>

<?php
	$rightNo=24;
		if(!isset($_GET['guess']))
			echo "Missing Guess parameter";
		else if(strlen($_GET['guess'])<1)
			echo "Your guess is too short";
		else if(is_numeric($_GET['guess'])===FALSE)
			echo "Your guess is not a number";
		else if($_GET['guess']<$rightNo)
			echo "Your Guess is too low";
		else if($_GET['guess']>$rightNo)
			echo "Your guess is too high";
		else if($_GET['guess']==$rightNo)
			echo "Congratulations!! You are right";
	
?>
</body>
</html>