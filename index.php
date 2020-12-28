
<?php 
// Making a function at the top of the document.
function sum($para1, $para2 = 0)
{   
    // Defalut value of parameter is NULL.
    $addition = $para1 +$para2;
    echo " The sum of 2 variables is : " . $addition . ".";
    return ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Function, Array and Strings"; ?></title>
</head>
<body>
<h1>THIS IS T3-Function, Array and Strings.</h1>
    <?php
        // Function is an independent code that performs a particular task.
        $var1 = 44;
        $var2 = 67;
        sum($var1); 
        
    ?>
</body>
</html>
