<?php 

    define('NAME', 'Yoshi'); // this is how a constant is declared
    // $name = 'Yoshi';
    $age = 30;

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
    <h1>User Profile Page</h1>
    <div>
        <?php echo NAME; ?>
        <?php echo $age; ?>
    </div>
</body>
</html>