<!doctype html>
<html>
<head lang="sv"></head>
<body>
	<?php include 'eval.html'; ?>
<?php
     	$ans1 = $_POST['q1'];
     	$ans2 = $_POST['q2'];
		$ans3 = $_POST['q3'];
     	$ans4 = $_POST['q4'];
		$ans5 = $_POST['q5'];

        $name = $_POST['name'];
     	$points = 0;
     	
     	if($ans1 == 10)
           $points++;
     	if($ans2 == 15)
           $points++;
		if($ans3 == 50)
           $points++;
     	if($ans4 == 3)
           $points++;
		if($ans5 == 4)
           $points++;
     	
     	echo("<p>" . $name . " fick " . $points . " av 5 möjliga</p>");
?>
	<input type="text">
</body>
</html>