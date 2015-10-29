<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://laravel-api-starter.dev/api/colors/10",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "name=Color%20Edited&code=111111&is_active=0",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbGFyYXZlbC1hcGktc3RhcnRlci5kZXYvYXBpL2xvZ2luIiwiaWF0IjoxNDQ2MDAwMzQ1LCJleHAiOjE0NDcyMDk5NDUsIm5iZiI6MTQ0NjAwMDM0NSwianRpIjoiNTMwNDlhZGM2NmE1ZDNlYzExZTVlYjgzZGVmOWJiODUiLCJzdWIiOjF9.0iRhmyGdJchwDwXosgjCTyWMXgpHAL_mXeZtGewYIB0",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: fc470e41-2b56-26e0-002c-259a4438aa68"
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