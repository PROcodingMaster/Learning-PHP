<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "THIS IS T3-Function, Array and Strings."; ?></title>
</head>
<body>
<h1>DIFFERENCE B/W SINGLE('') AND DOUBLE("") QUOTES</h1>
    <?php
        $var = "Aneesh";
        echo 'Hello my name is Aneesh';  // Single quote
        echo '<br>Hello my name is $var'; // Single quote with variable
        echo "<br>Hello my name is $var";   // Double quote with variable
        echo "<br>Hello my name is '$var'"; // Double quote with variable in single quote
        
    ?>
</body>
</html>
