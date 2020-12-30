<?php 
require 'common.php';
if (isset($_SESSION['id'])){
    echo "IS SET :" . $_SESSION['id'];
}
else{
    echo "NO !!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "T8- FORMS"; ?></title>
    
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
</head>
<body>
<?php
    include 'header.php'
?>
<h1 style = "text-align : center">Store data into DB using forms</h1>
    <div class="container">
        <!-- "GET" method passes the values entered in the URL and has a limit of 
                300 characters(not safe) -->
        <!-- "POST" method used to hide the form data in the URL
                it appends form data inside the body of HTTP request, 
                it has no limitations &can't be bookmarked.-->
        <!-- "action" contains the name of webpage to which form data is sent,
                this is be blank  if the form values are send to same page-->        
        <form action="user_registration_script.php" method="post">
            <div>
                <label for="email">EMAIL :</label>
                <input type="text" name="email" id="email"> <!-- "name" field is important to read the data.  -->
            </div>

            
            <div>
                <label for="first_name">FIRST NAME :</label>
                <input type="text" name="first_name" id="first_name">
            </div>

            
            <div>
                <label for="last_name">LAST NAME :</label>
                <input type="text" name="last_name" id="last_name">
            </div>

            
            <div>
                <label for="phone">PHONE :</label>
                <input type="text" name="phone" id="phone">
            </div>
            <input type="submit" value="Submit">
        </form>
        
        
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
