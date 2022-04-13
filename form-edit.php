<?php
include 'api.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    $base_url . '/' . $_GET['id']
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
        <h2 style="text-align: center;">Create Data</h2>
        <form action="update.php?id=<?php echo $result->_id ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="<?php echo $result->name ?>"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" class="form-control" name="age" id="age" aria-describedby="age" value="<?php echo $result->age ?>"
                    placeholder="Enter age">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Colour</label>
                <input type="text" class="form-control" name="colour" id="colour" aria-describedby="colour" value="<?php echo $result->colour ?>"
                    placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>

</body>

</html>
