<?php 
//$url = "http://centaura.zzz.com.ua/api/message/getDialogs?access_token=7c98baa1055e32894bd714043c0eb558";
$url = "http://centaura.loc/api/message/send?text=hello&uid=3&access_token=d8afc559ff6147340f0b1693364fa3de";
//$url = "http://centaura.loc/api/users/resetName?uid=1&name=Dude&access_token=";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, ["uid" => "3", "text" => "Wassup, nigga", "access_token" => "d8afc559ff6147340f0b1693364fa3de"]);

$result = curl_exec($ch);

echo "<pre>";
print_r($result);
echo "</pre>";
