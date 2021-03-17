<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php echo 'hello world' ?>
    </p>
    <?php
    $i=0;
    do{
        
        echo "<div>$i</div>";

        $i++;
    }
    while($i<10);

    ?>
</body>
</html>


