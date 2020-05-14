<?php 

    $radius = 25;
    $pi = 3.14;

    echo $pi * $radius**2;

    echo $radius++; // shows 25 before de increment
    echo $radius; // now it shows 26

    echo ++$radius; //now it shows 26 because the increment comes first

    echo floor($pi); // returns only the integer part
    echo ceil($pi); // return the top integer part
    echo pi(); // this function return the PI value

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
    <style>
    * {
        font-family: Arial, sans-serif;  
    }
    </style>
</head>
<body>

</body>
</html>