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
    //integer
    echo 40;
    //float
    echo 40.20;
    // we can do calculations using the symbols...
    // it also follows bodmas...
    //we can also store a number as a variable.
    $num = 10;
    $num++;
    echo $num;
    $num--;
    // $num += 10;
    // $num *= 10;
    // $num /= 10;

    echo $num;


    //getting absolute number...
    echo abs(-100);
    ///it will return 100
    //this will give us 3 raised to the power 4

    echo pow(2, 4);

    //getting squareroot...
    echo sqrt(4);
    //return the bigger number...
    echo min(2, 4);
    //return the larger number
    echo max(2, 4);
    //round off a number
    echo round(3.6);

    //round up a number
    echo ceil(3.2);

    // round a number  down
    echo floor(3.7);

    ?>
</body>
</html>