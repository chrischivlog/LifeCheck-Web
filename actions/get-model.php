<?php

//// only function not working stand alone!https://api.github.com/repos/chrischivlog/LifeCkeck-Data/contents/EOL-switches.json
$headers = array(
    "Accept: application/vnd.github.v4.raw",
    "Authorization: Bearer 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",
    "X-GitHub-Api-Version: 2022-11-28",
    "User-Agent: LifeCheck"
);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/LifeCkeck-Data/EOL-switches.json");
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);

$data = json_decode($result, true);

