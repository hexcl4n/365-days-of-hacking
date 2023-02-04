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
    $phrase = "AwesOme!";
    echo "Metric Code<br>";
    echo "$phrase<br>";
    // convert all text to lowecase....
    echo strtolower("$phrase<br>");
    // we can count the length of a string...
    echo strlen("$phrase<br>");
    //to figure out the first character of the string...
    echo "<br>$phrase[0]";
    echo "mike"[0];
    // we can replace specific indexing...
    $phrase[0] = "@";
    echo $phrase;

    //replace function.(you can replace a specific substring in a string variable.)
    
    echo str_replace("@wesOme!", "Cool", $phrase);
    //we can grab a sub string in regard to the indexes.
    //the first number = the index to start getting the substr 
    //the second = refers to the length of the string....
    echo substr($phrase,3,4)


    ?>
</body>
</html>