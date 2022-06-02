<?php
include './includes/class-autoload.inc.php';
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Voeg een nieuwe post toe</title>
</head>
<body>

<?php
if (array_key_exists('button1', $_POST)) {
    button1();
//    echo 'testButton1Push';
}
function button1()
{
    (new Posts())->newPost();
//    echo 'testButton1';
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form method="POST">

                        <div class="mb-3">
                            <label>gebruikersNaam
                                <input type="text" name="gebruikersNaam" value="" class="form-control">
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>tijdGeleden
                                <input type="text" name="tijdGeleden" value="" class="form-control">
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>imgLocation
                                <input type="text" name="imgLocation" value="" class="form-control">
                            </label>
                        </div>
                        <div class="mb-3">
                            <label>postDescription
                                <input type="text" name="beschrijving" value="" class="form-control">
                            </label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="button1" class="btn btn-outline-dark" value="button1">new
                                post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>