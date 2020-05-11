<?php 

    $stringOne = 'my email is ';
    $stringTwo = 'mario123@gmail.com';

    // echo $stringOne.$stringTwo // This is how things are concatenated
    
    $name = 'Mario';

    // echo 'My name is '.$mario;
    
    // differences between simple and double quotes
    // echo "Hey my name is $mario"; // double reads variable
    // echo 'Hey my name is $mario'; // simple reads literal

    // echo "someone screamed \"whaaa\""; // this is how to make "" appears on a string
    // echo 'someone screamed "whaaa"'; // another way to do the same (easier)

    // echo $name[0];

    // echo strlen($name); //function that shows the length of a string
    // echo strtoupper($name);
    // echo strtolower($name);
    echo str_replace('M', 'W', $name);

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