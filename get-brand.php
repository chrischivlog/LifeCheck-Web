<?php

//// only function not working stand alone!
    $headers = array(
        "Accept: application/vnd.github.v4.raw",
        "X-GitHub-Api-Version: 2022-11-28",
        "User-Agent: LifeCheck"
    );

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.github.com/repos/chrischivlog/LifeCkeck-Data/contents/EOL-brands.json");
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $result = curl_exec($curl);
    curl_close($curl);
    
    echo json_decode($result, true);
