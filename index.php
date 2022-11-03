<?php
$data = file_get_contents("response.json");
$response = json_decode($data,true);
$json = file_get_contents('php://input');
if($json)
{
    $jsonObj = json_decode($json,true);  
    for($i = 0 ; $i< count($jsonObj) ; $i++) {
        if($jsonObj['cargoStuffingNumber'] == $response[$i]['cargoStuffingNumber']) {
            $output = GetData($jsonObj['requestType'],$response[$i]);          
            break;
         }
        }     
       
    $jsonResponse = json_encode($output);
    return base64_encode($jsonResponse);
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
      }
      $jsonObj['response'] = $result;
      return $jsonObj['response'];
}    

?>