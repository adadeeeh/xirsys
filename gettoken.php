<?php

$curl = curl_init();
curl_setopt_array( $curl, array (
    CURLOPT_URL => "https://global.xirsys.net/_token/sample2?k=".$_POST["username"],
    CURLOPT_USERPWD => "akupintar:f0f07904-3e31-11e9-820d-0242ac110003",
    CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_RETURNTRANSFER => 1
));
$resp = curl_exec($curl);
print $resp;
curl_close($curl);

?>