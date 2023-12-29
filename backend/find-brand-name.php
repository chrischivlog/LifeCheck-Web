<?php

class BrandManager
{

    public $brandName;
    public $brandID;

    public function GetBrandByID($handover)
    {

        /// API request
        $apiRequest = new apiConnection();
        $apiRequest->getBrand();


        if (isset($_GET['brands'])) {

            $this->brandID = $_GET['brands']; // exposes the brandid from URL

            foreach ($apiRequest->getBrand as $key => $value) {
                if ($key == $handover) {
                    $this->brandName = $value; // exposes the name from API
                }
            }
        }
    }

    public function SearchBarBrand($value){
        
    }
}
