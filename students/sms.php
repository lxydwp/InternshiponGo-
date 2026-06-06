<?php

try {
    $message = $_POST;

   
     
     $message = [
       "secret" => "7a383216057ec881188801f4d2deb5420bc95954",
        "name" => "IntershiponGo",
        "phone" => "+639212930492",
        "message" => "Hi, This Free SMS",
       "receive_date" => "12/19/2022"
      ];
    
    // Before acknowledging the message, you should first verify 
    // if it's really coming from our platform. 
    // Use the web hook secret password to verify messages

    $secret = "7a383216057ec881188801f4d2deb5420bc95954";

    if($message["secret"] == $secret):
    	echo "true";
    	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sms.teamssprogram.com/api/get/sent?key=7a383216057ec881188801f4d2deb5420bc95954',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    else:
    	echo "false";
    endif;
} catch (Exception $e) {
    // Something went wrong
}
?>


