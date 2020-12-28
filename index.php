<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "THIS IS T3-Function, Array and Strings."; ?></title>
</head>
<body>
<h1>Arrays</h1>
    <?php
        $var1 = 44;
        $var2 = 67;
        $num = array(34 , 56); // Declare an array
        $sum = $num[0] + $num[1];
        echo "The sum is " . $sum;
        // Length of an Array
        echo "<br>Length of Array is : ". sizeof($num);
        
    ?>
</body>
</html>
