<?php
$external_id = $_POST['external_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$language = $_POST['language']
$password = $_POST['password'];

$url = 'https://YOUR_URL_HERE/api/application/';
$params = array(
    "external_id" => $external_id, //Optional
    "email" => $email,
    "username" => $username,
    "first_name" => $first_name,
    "last_name" => $last_name,
    "language" => $language,
    "root_admin": 'false', // false is default option. 'true' create admin user's
    "password" => $password,
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
