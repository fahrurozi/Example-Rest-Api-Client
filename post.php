<?php
include 'api.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$name = $_POST['name'];
$age = $_POST['age'];
$colour = $_POST['colour'];

$client = new Client();

$response = $client->request(
    'POST',
    $base_url,
    [
        'json' => [
            'name' => $name,
            'age' => $age,
            'colour' => $colour
        ]
    ]
);

if($response->getStatusCode()) {
    header("location:index.php");
} else {
    echo "Failed";
}

?>