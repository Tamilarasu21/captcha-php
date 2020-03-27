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
 	<title>captcha_verification2</title>
 	<style type="text/css">
 		body
 		{
 			font-family: sans-serif;
 			text-align: center;
 		}
 		.main{
 			margin-top: 200px;
 			font-size: 50px;
 		}
 		input[type=number]
 		{
 			width:300px;
 			height:40px;
 		}
 		input[type=submit]
 		{
			width:200px;
 			height:40px;
 			background-color: black;
 			color:white;
 		}
 	</style>
 </head>
 <body>
 	<div class="main">
 <form method="post" action="process.php">
 	<?php echo $first_num ." ".$operator." ".$second_num." = " ?>
 	<input type="number" name="answer"><br>
 	<input type="submit" name="submit" value="check">
 </form>
 </div>
 </body>
 </html>
 

