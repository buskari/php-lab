<?php 

    // indexed arrays
    $array = ['string1', 'string2', 'string3']; 
    // echo $array[1];
    $array2 = array(); // this is another way to declare an array using a function
    $ages = [10, 20, 30];
    // echo $ages; // this does not work, instead, use the method bellow
    print_r($ages);
    $ages[] = 40; // this is how we add an element to the end of an array
    array_push($ages, 50); // do the same this of the above
    count($ages); // returns de number of elements inside an array
    $array3 = array_merge($array, $array2); // this is how we merge to different arrays


    // associative arrays (key & value pairs needed)
    $array = ['valye1'=>'key1', 'value2'=>'key2', 'value3'=>'key3'];
    $array['value4'] = 'key4'; // how to push an value to the end of an associative array
    count($array);

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
        font-size: 32px;
    }
    </style>
</head>
<body>

</body>
</html>