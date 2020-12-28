<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "THIS IS T3-Function, Array and Strings."; ?></title>
</head>
<body>
<h1>2 dimentional Arrays</h1>
    <?php
        $num = array(array(78,12), array(3, 4)); // Declare 2 dimentional Arrays
        print_r($num);
        $sum = $num[0][1]+ $num[1][1];
        echo "<br>Sum of (0,1) and (1,1) is " . $sum . ".";
        
    ?>
</body>
</html>
