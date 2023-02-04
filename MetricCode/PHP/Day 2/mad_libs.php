<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<br>
<body>
    <form action="mad_libs.php" method="get">
        Name: <input type="text" name="UserName">
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <?php
    $name = $_GET["UserName"];
    $age = $_GET["age"];
    echo "Hello $name! You are Awesome!";
    echo "\n And you are $age years old"
        
    ?>
</body>
</html>