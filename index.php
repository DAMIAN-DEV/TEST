<?php 

	include_once ("d_lib\curl.php");
	include_once ("d_lib\DP.php");
	
	$grn_dol = curl("https://www.google.com.ua/search?rlz=1C1CHBD_ruUA778UA778&ei=jx5XWp2XC8qXsgGLy4XYDg&q=%D0%B4%D0%BE%D0%BB%D0%BB%D0%B0%D1%80+%D0%B3%D1%80%D0%B8%D0%B2%D0%BD%D0%B0&oq=%D0%B4%D0%BE%D0%BB&gs_l=psy-ab.3.0.0i131i67k1l2j0i67k1l3j0l2j0i67k1j0j0i67k1.368.4414.0.5740.20.11.0.0.0.0.851.1496.0j4j1j6-1.7.0....0...1c.1.64.psy-ab..14.6.1812.6..0i22i30k1j35i39k1j0i131k1.421.WDPVAibq4jE");
	$grn_euro = curl("https://www.google.com.ua/search?rlz=1C1CHBD_ruUA778UA778&biw=539&bih=511&ei=Q9hXWvX8D8qn6ASU4qvYDQ&q=%D0%B5%D0%B2%D1%80%D0%BE+%D0%B2+%D0%B3%D1%80%D0%B8%D0%B2%D0%BD%D1%8B&oq=%D0%B5%D0%B2%D1%80%D0%BE+%D0%B2+&gs_l=psy-ab.3.0.0l10.3737.9843.0.10848.29.17.3.0.0.0.246.1524.0j7j3.11.0....0...1c.1.64.psy-ab..16.13.1565.6..35i39k1j0i131k1j0i10i1k1j0i67k1j0i131i67k1j0i10k1.131.FvCXvUBq-n4");
	
	$kiev = curl("https://www.google.com.ua/search?rlz=1C1CHBD_ruUA778UA778&ei=U9dXWpjII6Og6AT0taWYBw&q=%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0+%D0%BA%D0%B8%D0%B5%D0%B2&oq=%D0%BF%D0%BE%D0%B3%D0%BE&gs_l=psy-ab.3.0.35i39k1l2j0i131i67k1l4j0i67k1j0i131i67k1j0j0i131k1.10327.13045.0.13932.21.12.1.0.0.0.151.1047.0j9.10.0....0...1c.1.64.psy-ab..12.9.1008.6..0i10i1i67i42k1j0i10i1k1.158.4KAVnm4e1Dw");
	$antalya = curl("https://www.google.com.ua/search?rlz=1C1CHBD_ruUA778UA778&ei=YtdXWs3GLIKB6ATx8pzoBw&q=%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0+gynfkbz&oq=%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D0%B0+gynfkbz&gs_l=psy-ab.3..35i39k1j0i13k1l9.170904.175874.0.178018.13.12.1.0.0.0.128.1394.0j12.12.0....0...1c.1.64.psy-ab..0.13.1395...0j0i131k1j0i67k1j0i131i67k1j0i10k1j0i10i42k1j0i22i30k1j0i10i2i42k1j0i2k1j33i160k1.0.Zg87gKjF0UY");
	//$result = findTegById('div','wob_tm',$html);
	
	//echo $result;
	
	
		
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
		 Parsing
		</title>
		<script type='text/javascript' src='js\grad.js' ></script>
		<meta charset='UTF-8'>
	</head>
	<body>
		<table>
			<tbody>
				<caption><h1>Парссинг</h1></caption>
				<tr><th>Курс валют</th><th>Погода</th></tr>
				<tr><td>1 доллар - <?php echo findTegByClass('div','vk_ans vk_bk',$grn_dol); ?></td><td>Киев    | <?php echo findTegById('div','wob_tm',$kiev) ?></td><tr>
				<tr><td>1 Евро - <?php echo findTegByClass('div','vk_ans vk_bk',$grn_euro); ?></td><td> Анталия | <?php echo findTegById('div','wob_tm',$antalya) ?></td><tr>
				
			</tbody>
		</table>

        


	</body>
</html>
<style>
	th{
		border:2px solid gray;
	}
	td{
		border:2px solid gray;
	}
	table{
		background:lightgray;
	}
	
</style>
