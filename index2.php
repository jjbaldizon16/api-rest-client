<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-maps-search1.p.rapidapi.com/search",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\r\n    \"queries\": [\r\n        \"psychologists in alabama\",\r\n        \"\",\r\n        \"\",\r\n        \"0x89c259b5a9bd152b:0x31453e62a3be9f76\"\r\n    ],\r\n    \"limit\": 2,\r\n    \"region\": \"US\",\r\n    \"language\": \"EN\",\r\n    \"coordinates\": \"32.318230,-86.902298\"\r\n}",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: google-maps-search1.p.rapidapi.com",
		"X-RapidAPI-Key: f88cd05e66msh21ce3c671fbe52fp12b3efjsnfbc48abaae7b",
		"content-type: application/json"
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