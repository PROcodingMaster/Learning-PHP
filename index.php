<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "THIS IS T3-Function, Array and Strings."; ?></title>
</head>
<body>
<h1>Associative Arrays</h1>
    <?php
        // In Associative Array we can change the index of the array too.
        $num = array("1st_number" => 34 ,"2nd_number" => 56); // Declare an Associative array
        $sum = $num["1st_number"] + $num["2nd_number"]; // Using Strings instead of 0 and 1.
        echo "The sum is " . $sum;
        // Length of an Array
        echo "<br>Length of Array is : ". count($num);
        
    ?>
</body>
</html>
