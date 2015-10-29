<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://laravel-api-starter.dev/api/colors/11",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbGFyYXZlbC1hcGktc3RhcnRlci5kZXYvYXBpL2xvZ2luIiwiaWF0IjoxNDQ2MDQxOTk2LCJleHAiOjE0NDcyNTE1OTYsIm5iZiI6MTQ0NjA0MTk5NiwianRpIjoiOTVlMWQzMGFkODhiNWM0MWNjNTNiZTYxYjkzODdjNDgiLCJzdWIiOjF9.E6xlWH0dRCNfoDKO4g_97E70Pdezr1356oPudXKs3e0",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: 5b2f21f0-4e36-688a-bcd0-1e22728e154e"
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