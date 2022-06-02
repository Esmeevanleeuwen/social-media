<?php
include './includes/class-autoload.inc.php';

$edit = new editCode;
$form = $_POST;
$edit->profielCode($form);

print_r($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=2.2">
    <title>Bewerk je profiel</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <?php
                    (new edit)->profielEdit();

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>