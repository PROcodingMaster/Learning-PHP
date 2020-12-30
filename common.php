<?php
    $con = mysqli_connect("localhost", "root","", "ecommerce") or die(mysqli_error($con));
    session_start();
    /* Below 3 are just test statements.
       |  //$user_registration_query = "INSERT into ecommerce.users(email_id, first_name, last_name, phone) values ('random', 'random', 'random', '2222')"
       |  //or die(mysqli_error($con));
       |  //$user_registration_submit = mysqli_query($con, $user_registration_query) ;
    */
    $_SESSION['id'] = mysqli_insert_id($con);
?>
