<?php  
session_start();

if(empty($_POST["answer"]))
{
	header("location:captcha.php?process=empty");
}
else
{
	$answer=$_SESSION["answer"];
	$user_answer=$_POST["answer"];

	if($answer==$user_answer)
	{
		header("location:captcha.php?process=correct");
	}
	else
	{
		header("location:captcha.php?process=wrong");
	}
}
?>
