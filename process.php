<!DOCTYPE html>
<html>
<head>
	<title>captcha verification</title>
	<style type="text/css">
		.main
		{
			font-family: sans-serif;
			margin-top: 200px;
		}
		fieldset
		{
			text-align: center;
			border-width: 8px;
			border-radius: 120px;
			font-size: 40px;
			background:white;
			background-position: fixed;
        }

	</style>
</head>
<body>
	
<div class="main">
<?php  

session_start();
if(empty($_POST["answer"]))
{
	echo "<fieldset>";
 echo "<h1>Solve...Enter that captcha</h1>";
 echo "</fieldset>";
  }
else
{
$answer=$_SESSION["answer"];
$user_answer=$_POST["answer"];
echo "<fieldset>";
if($answer==$user_answer)
{
  echo "<h1>You got it...</h1>";  }
else
{
	 echo "<h1>Try Again :-)</h1>";
 }
echo "</fieldset>";
}
?>
</div>
</body>
</html>