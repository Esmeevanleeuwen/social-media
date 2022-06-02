<?php
include './includes/class-autoload.inc.php';
$url = "index.php";

//if ((new Admin())->is_logged_in()) {
    session_start();
    (new Admin())->log_out();
//} else {
    (new Admin())->redirect($url);
//}
