<?php
$headers = [
		"Cache-Control: max-age=0",
		"Upgrade-Insecure-Requests: 1",
		"User-Agent: Mozilla/5.0 (Linux; Android 9; vivo 1904) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36",
		"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
		"Accept-Language: si-LK,si;q=0.9,en-US;q=0.8,en;q=0.7",
	];
$url = "https://www.fiverr.com/rashawn732/";
$ch = curl_init();
curl_setopt_array($ch, [
	CURLOPT_URL => $url,
	CURLOPT_HTTPHEADER => $headers,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_FOLLOWLOCATION => 1,
	CURLOPT_ENCODING => "",
]);
$response = curl_exec($ch);
curl_close($ch);
file_put_contents('raw.html', $response);
