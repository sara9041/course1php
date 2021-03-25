<?php require_once __DIR__.'/../config/app.php';
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html dir="<?php echo $config['dir']?>" lang="<?php $config['lang']?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app_name'] . " | " .$title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
<div class='container'>