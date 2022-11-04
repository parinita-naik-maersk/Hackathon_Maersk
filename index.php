<?php

$json = file_get_contents('php://input');
if($json)
{
    $data = file_get_contents("response.json");
    $api_response = json_decode($data,true);
    $jsonObj = json_decode($json,true);  

    for($i = 0 ; $i< count($api_response) ; $i++) {
        if($jsonObj['cargoStuffingNumber'] == $api_response[$i]['cargoStuffingNumber']) {
            $output = GetData($jsonObj['requestType'],$api_response[$i]);          
            break;
         }
        }     
       
    $jsonResponse = $output;
    $jsonObj['response'] = $jsonResponse;
    print_r(base64_encode(json_encode($jsonObj)));
}
else
{
    echo 'No message recieved yet';
}

function GetData($type, $jsonObj)
{
    switch ($type) {
        case "getETA":
            $result = $jsonObj['estimatedTimeOfArrivalDateTimeLocal'];           
          break;
        case "getShipmentStatus":
            $result = $jsonObj['shipmentStatus'];
          break;
        case "getEDD":
            $result = $jsonObj['estimatedTimeOfDischargeDateTimeLocal'];
          break;
        case "getPOL":  
            $result = $jsonObj['portOfDischargeLocation'];          
        case "getFdl" : 
            $a = json_decode($jsonObj['customerFinalPlaceOfDeliveryFacilityDetails'],true);  
            $fdl = [] ; $k = 0;
            foreach($a as $var)
            {
                $fdl[$k] = $var['CityName'];
                $k++;      
            }
            $result = json_encode($fdl);
            return $result;
        }      
     
}    

?>