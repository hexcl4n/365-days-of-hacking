<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="input.php" method="get">
        Name: <input type="text" name="UserName">
        <input type="submit">
    </form>

    <br>
    <?php
    // we are going to use a form
    // we can set up a form to get the user data...
    // the form data will be submitted to our php code...
    
    echo $_GET['UserName'];
    ?>
</body>
</html>