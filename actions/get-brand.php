<?php

//// only function not working stand alone!
$headers = array(
    "Accept: application/vnd.github.v4.raw",
    "X-GitHub-Api-Version: 2022-11-28",
    "User-Agent: LifeCheck"
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/LifeCkeck-Data/EOL-brands.json");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$data = json_decode($result, true);
