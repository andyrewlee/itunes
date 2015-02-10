<?php

$artist = str_replace(' ', '', $_POST['user_input']);
$url = "https://itunes.apple.com/search?term=".$artist."&entity=musicVideo";
$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$data = curl_exec($ch);
$info = curl_getinfo($ch);

curl_close($ch);
echo $data;
