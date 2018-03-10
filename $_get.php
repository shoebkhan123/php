
<!--
PHP $_GET can also be used to collect form data after submitting an HTML form with method="get".

$_GET can also collect data sent in the URL.
When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.


-->

<html>
<body>
	<form method = 'GET' action = "">
		Name: <input type = 'text' name = 'name'>
		<input type = 'submit'>
	</form>


<?php
	$name = $_GET['name'];
	if (empty($name)) {
		echo 'Name is empty.';
	}
	else{
		echo "The name is: ".$name;
	}


?>
</body>
</html>



