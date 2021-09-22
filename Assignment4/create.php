<?php
	require_once('json_util.php');
	
	$classmates=readJsonArray();
	$classmate=readSomeJson(rand(0, count($classmates)-1));
	array_push($classmates, $classmate);
	writeJason($classmates);
?>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  A new user has been created!
</div>
<a href="index.php"><?php echo 'Back to Home Page'?></a>
