<!DOCTYPE html>

<html>

<head>
	<title>Заглавие на страница</title>
</head>

<body>
<?php
	echo "Здрасти";
?>
<ul>
<?php	
	for ($i = 0; $i<10; $i++) {
?>		
		<li>
<?php
		echo "The number is: <b>" . $i . "</b><br>\r\n";
?>
		</li>
<?php		
	}
?>	
</ul>		
</body>
</html>









