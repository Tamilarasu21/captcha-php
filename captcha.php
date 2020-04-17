<?php 
session_start();

$first_num=rand(11,20);
$second_num=rand(1,10);

$operators=array("+","-","*");
$operator=rand(0,2);
$operator=$operators[$operator];

$answer=0;
switch($operator)
{
	case "+":
	$answer=$first_num + $second_num;
	break;
	case "-":
	$answer=$first_num - $second_num;
	break;
	case "*":
	$answer=$first_num * $second_num;
	break;
}

$_SESSION["answer"]=$answer;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>captcha_verification</title>
	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="main">
		 <h4>solve this captcha</h4>
 <form method="post" action="process.php">
	 <?php echo $first_num ." ".$operator." ".$second_num." = " ?>
 	<input type="number" name="answer"><br>
	 <input type="submit" name="submit" value="check">
 </form>
 </div>
 <div class=msg>
 <?php
	$fulUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	if(strpos($fulUrl,"process=empty")==true)
	{
		echo "<p class='error'>captcha can't be empty</p>";
		exit();
	}
	elseif(strpos($fulUrl,"process=correct")==true)
	{
		echo "<p class='error'>correct</p>";
		exit();
	}
	elseif(strpos($fulUrl,"process=wrong")==true)
	{
		echo "<p class='error'>wrong</p>";
		exit();
	}	
?>  
 </div>
 </body>
 </html>

 