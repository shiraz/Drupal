<?php //A very simple form. Notice that the values display in the URL. ?>

<form action="test.php" method="get">
	My string: <input type="text" name="my_string" />
	<input type="submit" value="Display the string" />
</form>

<?php

//Let's grab the string and display it.
if(isset($_GET['my_string'])) {
	print '<h1>Your string was: ' . $_GET['my_string'] . "</h1>";
}

?>

