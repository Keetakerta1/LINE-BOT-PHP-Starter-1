<?php
$access_token = 'Yr5he8Ym6AI7nPCj7ZRUJ7d5pUOsI7htkPUocwFPyYFzP/fWTSrkSN2drOvX8PRaI6UZRG8vyDprMpc+pbxQGOdBp6HaUfu5bF05FFuQXU5zP6POAQsLN7yJw7JzL6wgSoG5kpjYcPbfehLtVFqluwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;