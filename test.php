<?php 

	include_once ("d_lib\curl.php");
	include("d_lib\DP.php");

	echo findTegById('div','MAIN',curl("http://fizalg.zzz.com.ua/me/index.php"));
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
		 Parsing
		</title>
		<meta charset='UTF-8'>
	</head>
	<body>
		<?php echo $testing;?>
	</body>
</html>
<style>
	body{
		background:#eeeeee;
	}
</style>
