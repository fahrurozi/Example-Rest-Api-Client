<?php
include 'api.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'DELETE',
    $base_url . '/' . $_GET['id']
);

if($response->getStatusCode()) {
    header("location:index.php");
} else {
    echo "Failed";
}

?>