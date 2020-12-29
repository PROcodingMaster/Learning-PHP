<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T7 - SELECT QUERRY WITH PHP part 2."; ?></title>
    
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
</head>
<body>
<h1 style = "text-align : center">Display DB data</h1>
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
            
            <!-- Horizantal Line -->
            <hr width="100%" color="black"> 
            <div class="row">
                <div class="col-sm-3" style = "text-align : center"><h5>User</h5></div>
            </div>

            <div class="row">
                <div class="col-sm-2">ID</div>
                <div class="col-sm-10"><?php echo $row["id"]; ?></div>
            </div>

            <div class="row">
                <div class="col-sm-2">EMAIL</div>
                <div class="col-sm-10"><?php echo $row["email_id"]; ?></div>
            </div>

            <div class="row">
                <div class="col-sm-2">First Name : </div>
                <div class="col-sm-10"><?php echo $row["first_name"]; ?></div>
            </div>
            
            <div class="row">
                <div class="col-sm-2">Products : </div>
                <div class="col-sm-10"><?php echo num_of_products_purchased($con, $row['id']); ?></div>
            </div>
            <!-- Horizantal Line -->
            <hr width="100%" color="black"> 
            <br>
            <br>
            <br>
        <?php } ?>
    </div>
</body>
    <!-- JS link -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php 
    function num_of_products_purchased($con, $user_id){
        $user_product_query = "SELECT id FROM users_products WHERE user_id = '$user_id'";
        $user_product_result = mysqli_query($con, $user_product_query);
        $num_of_products = mysqli_num_rows($user_product_result);
        return $num_of_products;
    }
?>
