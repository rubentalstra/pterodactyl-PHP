<?php
$url = 'https://YOUR.URL/api/application/';
$params = array(
"external_id" => "2", //Optional
    "email" => 'test@test.com',
    "username" => 'TestUser',
    "first_name" => 'Test',
    "last_name" => 'User',
    "language" => 'en',
    "password" => '123456'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);

    $headers = [
        "Authorization: Bearer YOUR_ADMIN_API",
        "Accept: Application/vnd.pterodactyl.v1+json",
    ];

// This should be the default Content-type for POST requests
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if(curl_errno($ch) !== 0) {
    error_log('cURL error when connecting to ' . $url . ': ' . curl_error($ch));
}

curl_close($ch);
print_r($result);  
?>
