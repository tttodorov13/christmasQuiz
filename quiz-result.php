<html>
<head></head>
<body>
<?php 

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];


 $totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "A") { $totalCorrect++; }
if ($answer3 == "C") { $totalCorrect++; } 


?>
<div id='results'> <b>You have 
	<?php echo "$totalCorrect"; ?>
	correct answers</b></div> 


</body>

</html>