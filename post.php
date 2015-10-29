<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://laravel-api-starter.dev/api/cats?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbGFyYXZlbC1hcGktc3RhcnRlci5kZXYvYXBpL2xvZ2luIiwiaWF0IjoxNDQ2MDAwMzQ1LCJleHAiOjE0NDcyMDk5NDUsIm5iZiI6MTQ0NjAwMDM0NSwianRpIjoiNTMwNDlhZGM2NmE1ZDNlYzExZTVlYjgzZGVmOWJiODUiLCJzdWIiOjF9.0iRhmyGdJchwDwXosgjCTyWMXgpHAL_mXeZtGewYIB0',
    CURLOPT_USERAGENT => 'Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'name' => 'Kucing',
        'age' => '3'
    )
));

// Send the request & save response to $resp
$response = curl_exec($curl);

$result = json_decode($response);

if ($result->cat) {
    echo 'New cat added!';
}

// Close request to clear up some resources
curl_close($curl);
?>