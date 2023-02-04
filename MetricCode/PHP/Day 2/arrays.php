<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $friends = array("Joey","Rachael","Monica","Chandler","Ross","Phoebe");
    echo $friends[0];
    // you can add new data to the array...
    $friends[6] = "Angie";
    
    echo $friends[6];

    // count the data in the array...
    echo count($friends);

    ?>
</body>
</html>