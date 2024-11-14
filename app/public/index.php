<?php
(@include '../src/app.php') or die('Could not run an app');

$app = new App();
$app->HelloWorld();
?>