
<!--
PHP $_REQUEST is used to collect data after submitting an HTML form.
-->

<html>
<body>
	<form method = 'POST' action = "<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type = 'text' name = 'name'>
		<input type = 'submit'>
	</form>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $_REQUEST['name'];
	if (empty($name)) {
		echo 'Name is empty.';
	}
	else{
		echo "The name is: ".$name;
	}
}

?>
</body>
</html>



