<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://pmi-jateng.p.rapidapi.com/?iniya=xx(ganti id)",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: pmi-jateng.p.rapidapi.com",
		"x-rapidapi-key: xxxxxxxxxxxxxxxxxx(ganti rapidapikey)"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
