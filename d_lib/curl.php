<?
	function curl($url,$param ,$type,$referer = "https://www.google.com"){
		$curl = curl_init();
		curl_setopt($curl,CURLOPT_URL,$url);
		curl_setopt($curl,CURLOPT_HEADER,0);
		curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
		curl_setopt($curl,CURLOPT_REFERER,$referer);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_CUSTOMREQUEST,$type);
		curl_setopt($curl,CURLOPT_POSTFIELDS,$param);
		$data = curl_exec($curl);
		var_dump($data);
		curl_close($curl);
		return $data;
		
	
	}
?>