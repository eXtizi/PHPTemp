<?php

ini_set('display_errors', 1);

function fiv($user){
	$headers = [
		"Cache-Control: max-age=0",
		"Upgrade-Insecure-Requests: 1",
		"User-Agent: Mozilla/5.0 (Linux; Android 9; vivo 1904) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36",
		"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
		"Accept-Language: si-LK,si;q=0.9,en-US;q=0.8,en;q=0.7",
	];

	$url = "https://www.fiverr.com/".$user."/";
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
	return $response;
}

$pageContent = '';
$pageContentx = '';
if($_POST){
	
	$id = $_POST['id'] ?? '';
	
	if($id != ''){
		$pageContent = fiv($id);
	}
	if($id != ''){
		$pageContent = fiv($id);
		echo json_encode(array('ok' => true, 'data' => $pageContent));
		exit;
	}
	$pageContent .= <<<EOL
	
	<br>
	<br>
<form method="post">
 	<input type="text" placeholder="username" value="" name="id"></input><br>
	<input type="submit" value="SAVE"></input>
</form>
EOL;
}
else{
	$pageContent .= <<<EOL
<form method="post">
 	<input type="text" placeholder="username" value="" name="id"></input><br>
	<input type="submit" value="SAVE"></input>
</form>
EOL;
}
$pageContent .= <<<STYLE
<style>
body{background-color:#000;}
textarea{background-color:#222;border:none;margin-top:15px;margin-bottom:5px;margin-left:5px;margin-right:5px;width:98%;height:200px;color:#0d0;font-family:consolas;font-size:20px;}
label{background-color:transparent;border:none;margin:5px;color:#f60;width:98%;height:25px;font-family:consolas;font-size:20px;}
input[type=text]{background-color:#222;border:none;margin:5px;color:#f60;width:98%;height:25px;font-family:consolas;font-size:20px;}
input[type=checkbox]{background-color:#222;border:none;margin:5px;}
input[type=submit]{background-color:#222;border:none;margin:5px;color:#f60;cursor:pointer;width:98%;height:25px;font-family:consolas;font-size:20px;}
a{color:#0a0;}
</style>
STYLE;
if(isset($_POST['api'])){
	echo json_encode(array('ok' => false, 'data' => ''));
	exit;
}
else{
	echo $pageContent;
}





	
	
	?>
