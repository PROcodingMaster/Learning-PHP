<?php
//Connect query
$con = mysqli_connect("localhost", "root","", "ecommerce") or die(mysqli_error($con));

// Store form data in variables
//mysqli_real_escape_string --> Adds "\" behind any special character like " ' (single quote)"
$email = mysqli_real_escape_string($con, $_POST['email'] );
$first_name =mysqli_real_escape_string($con,  $_POST['first_name']);
$last_name = mysqli_real_escape_string($con,$_POST['last_name'] );
$phone = mysqli_real_escape_string($con,$_POST['phone'] );

//Insert querry
//$user_registration_query = "insert into ecommerce.users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_query = "INSERT into ecommerce.users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')"
or die(mysqli_error($con));

// Run query
$user_registration_submit = mysqli_query($con, $user_registration_query) ;
//die(mysqli_error($user_registration_submit));

echo "User Successfully Inserted";

// START the SESSION
$_SESSION['email_id'] = $email;
echo "Your Email - " . $_SESSION['email_id'];
$_SESSION['id'] = mysqli_insert_id($con);
echo "Your ID - " . $_SESSION['id'];


?>