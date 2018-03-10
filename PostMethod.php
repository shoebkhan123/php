
<!--
PHP $_POST is widely used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

-->

<html>
<body>
	<form method = 'POST' action = "">
		Name: <input type = 'text' name = 'name'>
		<input type = 'submit'>
	</form>


<?php
	$name = '';
	$name = $_POST['name'];
	if (empty($name)) {
		echo 'Name is empty.';
	}
	else{
		echo "The name is: ".$name;
	}


?>
</body>
</html>



