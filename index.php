<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T7 - SELECT QUERRY WITH PHP part 2."; ?></title>
</head>
<body>
<h1>Display DB data</h1>
    <?php
        //Connect DB
        $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
        //Use SOLi select Querry and store it in a variable.
        $select_query = "SELECT id, email_id, first_name FROM users";
        //Use the querry and store the result in anothet variable.
        $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
        
    ?>
    <div class="container">
        <?php while($row = mysqli_fetch_array($select_query_result)) { ?>
            <div class="row">
                <div class="col-lg-12">User</div>
            </div>

            <div class="row">
                <div class="col-xs-2">ID</div>
                <div class="col-xs-10"><?php echo $row["id"]; ?></div>
            </div>

            <div class="row">
                <div class="col-xs-2">EMAIL</div>
                <div class="col-xs-10"><?php echo $row["email_id"]; ?></div>
            </div>

            <div class="row">
                <div class="col-xs-2">First Name</div>
                <div class="col-xs-10"><?php echo $row["first_name"]; ?></div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
