<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html lang="{{ app()->getLocale() }}">
		<head>
 
 			<meta content="text/html; charset=ISO-8859-1" httpequiv="content-type">
		 
			<title>ejercicio 4.12</title>
		</head>
		<body>
			<?php
			for ($i=0;$i<10;$i++)
			 $v[$i]=$i*2;
			for ($i=0;$i<10;$i++)
			 echo “$v[$i]<br>”;
			?>
		</body>
	</html>
