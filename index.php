<?php
include 'api.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    $base_url
);

$body_json = $response->getBody();
$result = json_decode($body_json);

// foreach ($result as $row) {
//     echo $row->name;
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Guzzle Rest API Client CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    
    <div class="container">
        <h2 style="text-align: center;">Guzzle Rest API Client CRUD</h2>
        <br><br><br>
        <a class="btn btn-primary" href="create.php" role="button">Create</a>
    <br>
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align: center;">_id</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Age</th>
                    <th style="text-align: center;">Colour</th>
                    <th style="text-align: center;" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $row->_id ?></td>
                        <td style="text-align: center;"><?php echo $row->name ?></td>
                        <td style="text-align: center;"><?php echo $row->age ?></td>
                        <td style="text-align: center;"><?php echo $row->colour ?></td>
                        <td style="text-align: center;"><a href='form-edit.php?id=<?php echo $row->_id ?>'>Edit</a></td>
                        <td style="text-align: center;"><a href='delete.php?id=<?php echo $row->_id ?>'>Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br><br>
    </div>

</body>

</html>