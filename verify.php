$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:AxdPBHLlDIrDtcq';
<?php
$access_token = 'z4QzjGs1/pt5R0yM2LchpWKI0nlQ16oNT+se2I7/wvQw1H1l3Y6+ZbWLKZX722Q8tXmFz5ZkTw3cqiNISIowIlIX9r5y5lh8AyOoTD7VqySbskj07JMVHbZzlTZfveBWWcmPYbxKqYPzG6OCS95qZAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
