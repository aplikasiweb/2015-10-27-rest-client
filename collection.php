<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://laravel-api-starter.dev/api/colors",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbGFyYXZlbC1hcGktc3RhcnRlci5kZXYvYXBpL2xvZ2luIiwiaWF0IjoxNDQ2MDAwMzQ1LCJleHAiOjE0NDcyMDk5NDUsIm5iZiI6MTQ0NjAwMDM0NSwianRpIjoiNTMwNDlhZGM2NmE1ZDNlYzExZTVlYjgzZGVmOWJiODUiLCJzdWIiOjF9.0iRhmyGdJchwDwXosgjCTyWMXgpHAL_mXeZtGewYIB0",
    "cache-control: no-cache",
    "postman-token: da6a08e0-4c57-99d3-dfaa-c15dc17ecd56"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}