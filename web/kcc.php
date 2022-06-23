<?php

error_reporting(0);

//////////////////////////////=================[Join @TechHacksBySoham For More Stuff]=================/////////////////////////

function Soham_Capture($str, $starting_word, $ending_word){
$subtring_start  = strpos($str, $starting_word);
$subtring_start += strlen($starting_word);
$size            = strpos($str, $ending_word, $subtring_start) - $subtring_start;
return substr($str, $subtring_start, $size);
};


$anchor_link = 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6Lc6-X4gAAAAANwNOabtgzFlrmAW3kYBMi2t2GuD&co=aHR0cHM6Ly9rY2NtdWx0aXBsZXgubGs6NDQz&hl=en&v=M10Y1otwqRkBioiFUKRQ8s3N&size=invisible&cb=4fwop33e4s92';
$anchor_ref  = 'https://kccmultiplex.lk/';

$reload_link = 'https://www.google.com/recaptcha/api2/reload?k=6Lc6-X4gAAAAANwNOabtgzFlrmAW3kYBMi2t2GuD';
$reload_ref = 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6Lc6-X4gAAAAANwNOabtgzFlrmAW3kYBMi2t2GuD&co=aHR0cHM6Ly9rY2NtdWx0aXBsZXgubGs6NDQz&hl=en&v=M10Y1otwqRkBioiFUKRQ8s3N&size=invisible&cb=4fwop33e4s92';
$v   = 'M10Y1otwqRkBioiFUKRQ8s3N';
$k   = '6Lc6-X4gAAAAANwNOabtgzFlrmAW3kYBMi2t2GuD';
$co  = 'aHR0cHM6Ly9rY2NtdWx0aXBsZXgubGs6NDQz';
$chr = urlencode('[93,60,96]');
$bg  = '!Oz2gPTgKAAQeEt_2bQEHDwJ7jsL2WFToBFYaC_YkwD5-eRploRfV6HAlvU7FuMqWsi3fIM6t7mTUBsFXasYcppnGxXZQZISAH4YIVT1hSexnr5QQneWx5xxEeUi4twbfMFRx_Clx8qVPILjYvnWJWzoJWXolO_YdqmV9SNc2n7Ucv-UDlmpkyLyAaprlRsZ7ufcfnIZPiYACDjCooVUzRb5HS9jc40J0R646FZxiq-2kX5i_1EAFZ5rY2WKh4vKzCWZlnPCpUhzIvEuwE77JAnlq2Ka0kWNbo5Q5YQD2f8-d6cIdlUuCPxjsv03sFMsvTm8x67pI7FRno5eKej9EGJDcU3y_5du07twyZgvBQcpcRGb6msJ_95Qnsw_iX3rzfLVl0Aidx66DY83auaXMYNHzGVU2n-856pOv4hURsQ0F-I12aDRqOgSHz4biP5aIIp5c6cJAELdIx_0sNEMBEUHrRmLMwDtG0ZGs0toyLI9VAYibsOgxMW6zeAQ4moQ0Trqon81_dylkxUkeyu-AGJtORLhQtLvH2rt7Q8eGCsGBbtUrUiTAdeMnAQe3GrwwZc_8vaxovps-vhJMPKCHgy2j0yxHhUKC7_dBzVD0zQwwF-UApmCRnEXuaIVQSOk-fKoXDXVLlWOqa38wysxDKxtT1J-kS1yxMDQgeO4eGzrd7ykORBPnabaJJD_Z5xOII2jn5OrVBv3SvJUXZeWvXIakQQBw-r5z6CfNck9ZLgD7hlx5rbQ-fApL8ihV9Udqn0sAsu7cqa7pOH1HzG8or2j7P3Z-M53o8CXfsl9qABI_boVfSQ1AkPNl2-BxouwBr-BAvclik8JBKQPJhxJunG9NtpwEcNXJsAyPmuOcANDfWBHUtZIL4MTYHVEs1e7JshGsWOGLhG1qKcC23PrmYr2ArxvYnv0paql41pUD_pU_iJt59uXgVGDo6mgKVtVhT1hKzO37NmtnRsv0kRQIC9r6atOuOdvDI34OLXciv39OYsCX0YS-sVpz81xzUwUxGeJ2NBhpeC1FW43YzNdMOw0X6AGZJ37hVZUdNuiO8R9fh8jOxcepJjuEeEubORVX8oXIkYIAWYDpTH7avLnC9HDE2SbvUCwtoJ-7ORkxGe42b_3T4FMeorVel5Cu4YaJ';
$vh  = '-1586764132';

//////////////////=================[Anchor Named Req]=================//////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $anchor_link);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.google.com',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: en-US,en;q=0.9',
'referer: '.$anchor_ref.'',
'sec-fetch-dest: iframe',
'sec-fetch-mode: navigate',
'sec-fetch-site: cross-site',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

if (!strpos($result, "recaptcha-token")){
echo '<span class="badge badge-warning">#DEAD</span></br><span class="badge badge-danger">『 ★ Page not loaded !! ★ 』</span></br><span class="new badge badge-warning">Api Made By ♛ Soham ♛</span></br>';
return;
};

$rtk = Soham_Capture($result, '<input type="hidden" id="recaptcha-token" value="', '"');

//////////////////=================[Reload Named Req]=================//////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $reload_link);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.google.com',
'accept: */*',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://www.google.com',
'referer: '.$reload_ref.'',
'user-agent: Mozilla/5.0 (Windows NT '.rand(11,99).'.0; Win64; x64) AppleWebKit/'.rand(111,999).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.'.rand(1111,9999).'.'.rand(111,999).' Safari/'.rand(111,999).'.'.rand(11,99).''));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'v='.$v.'&reason=q&c='.$rtk.'&k='.$k.'&co='.$co.'&hl=en&size=invisible&chr='.$chr.'&vh='.$vh.'&bg='.$bg.'');
$result = curl_exec($ch);
curl_close($ch);

if (!strpos($result, '"rresp","')){
echo '<span class="badge badge-warning">#DEAD</span></br><span class="badge badge-danger">『 ★ Error in captcha !! ★ 』</span></br><span class="new badge badge-warning">Api Made By ♛ Soham ♛</span></br>';
return;
};
$captcha = Soham_Capture($result, '["rresp","', '"');


if (strpos($result, '"rresp","')){
echo "✅ Captcha Bypassed Successfully<br>Captcha Response: $captcha<br><br>Api Made by Soham";
}
else{
echo "❌ Error in solving Captcha<br>Result: $result<br><br>Api Made by Soham";
};

?>