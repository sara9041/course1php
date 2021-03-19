<?php require_once __DIR__.'/../config/app.php';
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html dir="<?php $config['dir']?>" lang="<?php $config['lang']?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app_name']?></title>
</head>
<body>