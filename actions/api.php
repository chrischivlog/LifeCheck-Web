<?php

class apiConnection
{

    public $getModel;
    public $getBrand;

    public function getModel(){

        $data = json_decode(file_get_contents('./actions/api-key.json'), true);

        //// only function not working stand alone!https://api.github.com/repos/chrischivlog/LifeCkeck-Data/contents/EOL-switches.json
        $headers = array(
            "Accept: application/vnd.github.v4.raw",
            "Authorization: Bearer" . $data[0]['api-key'],
            "X-GitHub-Api-Version: 2022-11-28",
            "User-Agent: LifeCheck"
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1/LifeCkeck-Data/EOL-switches.json");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        $this->getModel = json_decode($result, true);
    }


    public function getBrand(){
        $data = json_decode(file_get_contents('./actions/api-key.json'), true);


        //// only function not working stand alone! https://api.github.com/repos/chrischivlog/LifeCkeck-Data/contents/EOL-brands.json
        $headers = array(
            "Accept: application/vnd.github.v4.raw",
            "Authorization: Bearer" . $data[0]['api-key'],
            "X-GitHub-Api-Version: 2022-11-28",
            "User-Agent: LifeCheck"
        );

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://127.0.0.1/LifeCkeck-Data/EOL-brands.json");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        $this->getBrand = json_decode($result, true);
    }
}
