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
        //Connect DB
        $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
        //Use SOLi select Querry and store it in a variable.
        $select_query = "SELECT id, email_id, first_name FROM users";
        //Use the querry and store the result in anothet variable.
        $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        //Function to count the number of rows fetched.
        $total_rows_fetched = mysqli_num_rows($select_query_result);
        //Print the number of rows fetched.
        echo "Rows fetched : ". $total_rows_fetched;
    ?>
</body>
</html>
