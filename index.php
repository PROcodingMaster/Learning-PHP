<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T4-LOOPS."; ?></title>
</head>
<body>
<h1>While Loop</h1>
    <?php
        $counter = 1;
        while($counter <= 5){
            echo "$counter" . "<br>";
            $counter++;
        }
    ?>
</body>
</html>
