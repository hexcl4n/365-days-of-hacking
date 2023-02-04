<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basic_calc.php" method="get">
        Num1: <input type="Number" name="num1">
        Num2: <input type="Number" name="num2">
        <input type="submit">
    </form>
    <?php
    echo "Answer : ";
    echo ($_GET["num1"] + $_GET["num2"]);
    // Notice on the site url, the parameters show up....
    ?>
</body>
</html> 