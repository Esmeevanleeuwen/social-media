<?php
include './includes/class-autoload.inc.php';
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=2.2">
    <title>Admin Login</title>
</head>
<body>
<?php
$_POST['username'] = 'justin';
$_POST['password'] = 'Test1234.';
//$url = "http://localhost/W3-Social-Media/index.php";


?>

<form method="post" action="<?php (new Admin())->adminLogin($_POST['username'], $_POST['password']); ?>">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php
//print_r($_POST);
//print_r($_SESSION);
//(new Admin())->redirect($url);
?>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
