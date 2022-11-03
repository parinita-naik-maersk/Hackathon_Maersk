<?php
$response = '[{
    "cargoStuffingId": 32075,
    "cargoStuffingNumber": "NNFW880099",
    "consigneeName": "HUFFY CORPORATION",
    "consigneeBECode": "USHUFFYHQ",
    "sealNumber": "NNFLOW545514SEAL",
    "cargoStuffingType": "46HIGH",
    "carrierName": "MAERSK LINE",
    "carrierCode": "MAEU",
    "primaryExecutiveStatus": null,
    "secondaryExecutiveStatus": null,
    "cargoStuffingPriority": null,
    "hasDangerousGoods": false,
    "hasGarmentOnHanger": false,
    "isReefer": false,
    "vesselVoyage": "YM INCREMENT / NNVYG682",
    "portOfDischargeLocation": "Rotterdam",
    "portOfDischargeCountry": "Netherlands",
    "transportDocumentNumber": "NNFLOW883862BL",
    "transportDocumentTypeCode": "SEA_WAYBILL",
    "latestDeliveryDateTimeUTC": null,
    "latestDeliveryDateTimeLocal": null,
    "predictiveEstimatedTimeOfArrivalDateTimeUTC": null,
    "estimatedTimeOfArrivalDateTimeUTC": "2022-11-14T00:00:00Z",
    "estimatedTimeOfArrivalDateTimeLocal": "2022-11-14T01:00:00",
    "estimatedTimeOfArrivalTimeZone": "CET",
    "terminalReadyDateTimeUTC": null,
    "carrierReleasedDateTimeUTC": null,
    "carrierReleasedDateTimeLocal": null,
    "carrierReleasedTimeZone": null,
    "customsClearedDateTimeUTC": null,
    "pickupReference": null,
    "pickupReferenceExpiryDateTimeUTC": null,
    "pickupReferenceExpiryDateTimeLocal": null,
    "pickupReferenceExpiryTimeZone": null,
    "emptyReturnReference": null,
    "emptyReturnReferenceExpiryDateTimeUTC": null,
    "emptyReturnReferenceExpiryDateTimeLocal": null,
    "emptyReturnReferenceExpiryTimeZone": null,
    "actualTimeOfArrivalDateTimeLocal": null,
    "cargoStuffingGateOutDateTimeLocal": null,
    "cargoStuffingFeeType": "Combined",
    "lastFreeDateTimeLocal": "2022-11-20T01:00:00",
    "haveMultipleTransportDocuments": false,
    "wasModifiedByUser": false,
    "specialProgram": null,
    "countLastFreeDate": 18,
    "contractStartEvent": "ETA",
    "lastFreeTimeZone": "CET",
    "shipmentMessageSource": "Excel",
    "customerFinalPlaceOfDeliveryFacilityCode": "INBLRTRM",
    "customerFinalPlaceOfDeliveryFacilityDetails": "[{\"FacilityCode\":\"INBLRTRM\",\"CityName\":\"Bangalore\",\"FullAddress\":\" \\r\\n80 FEET ROAD, KORAMANGALA,\\r\\n20TH MAIN, 6TH BLOCK\\r\\nBangalore 560095\\r\\n\\r\\nIndia\"}]",
    "shipmentStatus": "APPROVED",
    "estimatedTimeOfDischargeDateTimeLocal": "2022-11-16T01:00:00Z",
    "estimatedTimeOfDischargeDateTimeUTC": "2022-11-16T00:00:00Z"
},
{
        "cargoStuffingId": 31469,
        "cargoStuffingNumber": "NNFLOW1196895EQ",
        "consigneeName": "HUFFY CORPORATION",
        "consigneeBECode": "USHUFFYHQ",
        "sealNumber": "NNFLOW97622SEAL",
        "cargoStuffingType": "45HIGH",
        "carrierName": "AMERICAN PRESIDENT LINES",
        "carrierCode": "APLU",
        "primaryExecutiveStatus": null,
        "secondaryExecutiveStatus": null,
        "cargoStuffingPriority": null,
        "hasDangerousGoods": false,
        "hasGarmentOnHanger": false,
        "isReefer": false,
        "vesselVoyage": "CHARLOTTE MAERSK / VO204748",
        "portOfDischargeLocation": "Los Angeles",
        "portOfDischargeCountry": "United States",
        "transportDocumentNumber": "NNFLOW137705BL",
        "transportDocumentTypeCode": "SEA_WAYBILL",
        "latestDeliveryDateTimeUTC": null,
        "latestDeliveryDateTimeLocal": null,
        "predictiveEstimatedTimeOfArrivalDateTimeUTC": null,
        "estimatedTimeOfArrivalDateTimeUTC": "2022-11-12T00:00:00Z",
        "estimatedTimeOfArrivalDateTimeLocal": "2022-11-11T16:00:00",
        "estimatedTimeOfArrivalTimeZone": "PST",
        "terminalReadyDateTimeUTC": null,
        "carrierReleasedDateTimeUTC": null,
        "carrierReleasedDateTimeLocal": null,
        "carrierReleasedTimeZone": null,
        "customsClearedDateTimeUTC": null,
        "pickupReference": null,
        "pickupReferenceExpiryDateTimeUTC": null,
        "pickupReferenceExpiryDateTimeLocal": null,
        "pickupReferenceExpiryTimeZone": null,
        "emptyReturnReference": null,
        "emptyReturnReferenceExpiryDateTimeUTC": null,
        "emptyReturnReferenceExpiryDateTimeLocal": null,
        "emptyReturnReferenceExpiryTimeZone": null,
        "actualTimeOfArrivalDateTimeLocal": null,
        "cargoStuffingGateOutDateTimeLocal": null,
        "cargoStuffingFeeType": null,
        "lastFreeDateTimeLocal": null,
        "haveMultipleTransportDocuments": false,
        "wasModifiedByUser": false,
        "specialProgram": null,
        "countLastFreeDate": null,
        "contractStartEvent": null,
        "lastFreeTimeZone": null,
        "shipmentMessageSource": "Excel",
        "customerFinalPlaceOfDeliveryFacilityCode": "NLROTTRM",
        "customerFinalPlaceOfDeliveryFacilityDetails": "[{\"FacilityCode\":\"NLROTTRM\",\"CityName\":\"Rotterdam\",\"FullAddress\":\"59070 \\r\\nPOSTBUS\\r\\nRotterdam 3008 PB\\r\\nZuid-Holland\\r\\nNetherlands\"}]",
        "shipmentStatus": "APPROVED",
        "estimatedTimeOfDischargeDateTimeLocal": "2022-11-22T16:00:00Z",
        "estimatedTimeOfDischargeDateTimeUTC": "2022-11-23T00:00:00Z"
    
}
]';
$json = file_get_contents('php://input');
if($json)
{
    $jsonObj = json_decode($json,true);
    
    $t = json_decode($response,true);
    
    for($i = 0 ; $i< count($t) ; $i++)
    {
    if($jsonObj['cargoStuffingNumber'] == $t[$i]['cargoStuffingNumber'])
    {
        if($jsonObj['requestType'] == 'GetETA')
        {
           $result = ($t[$i]['estimatedTimeOfArrivalDateTimeLocal']);
           $jsonObj['response'] = $result;
        }
    }
    }    
    $jsonObj = json_encode($jsonObj);
  echo base64_encode($jsonObj);
  echo strlen(base64_encode($jsonObj));
    // $password="password";  
    // $encrypted_string=openssl_encrypt($jsonObj,"AES-128-ECB",$password);
    // echo $encrypted_string;
    // $decrypted_string=openssl_decrypt($encrypted_string,"AES-128-ECB",$password);
    // echo $decrypted_string;

}
else
{
    echo 'No message recieved yet';
}
    

?>