<?php
sleep(2);
if ($_POST['name'] == "Admin")
	echo "Fail";
else 
	echo $_POST['name'];

?>