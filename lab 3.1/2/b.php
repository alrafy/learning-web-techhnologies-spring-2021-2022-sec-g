<?php 
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['email'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>Email</legend>
            <input type="text" name="email" value=""><br/><hr>
            <input type="submit" name="submit" value="Submit">
         
		</fieldset>
	</form>
</body>
</html>