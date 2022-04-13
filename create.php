

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
        <form action="post.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                    placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" class="form-control" name="age" id="age" aria-describedby="age"
                    placeholder="Enter age">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Colour</label>
                <input type="text" class="form-control" name="colour" id="colour" aria-describedby="colour"
                    placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
    </div>

</body>

</html>
