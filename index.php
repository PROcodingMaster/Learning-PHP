<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T4-LOOPS."; ?></title>
</head>
<body>
<h1>Foreach Loop</h1>
    <?php
        //Used to Loop through Arrays.
        $marks = array(1,2,4,5,6,9,0,6,3,88);
        foreach($marks as $mark){
            echo "Value :"  . $mark . "<br>";
        }
    ?>
</body>
</html>
