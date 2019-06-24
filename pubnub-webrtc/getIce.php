<?php


// $data = array( "format" => "urls" );
// $data_json = json_encode($data);

$curl = curl_init();
curl_setopt_array( $curl, array (
    // CURLOPT_HTTPHEADER => array("Content-Type: application/json","Content-Length: " . strlen($data_json)),
    // CURLOPT_POSTFIELDS => $data_json,
    CURLOPT_URL => "https://global.xirsys.net/_turn/sample2",
    CURLOPT_USERPWD => "akupintar:f0f07904-3e31-11e9-820d-0242ac110003",
    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_RETURNTRANSFER => "1"
));
$resp = curl_exec($curl);
echo $resp;
curl_close($curl);

?>