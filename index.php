<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T5 - DATABASE CONNECTION."; ?></title>
</head>
<body>
<h1>Connect Database to webpage in PHP</h1>
    <?php
        $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    ?>
</body>
</html>
