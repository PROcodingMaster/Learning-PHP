<?php
//Connect query
$con = mysqli_connect("localhost", "root","", "ecommerce") or die(mysqli_error($con));

// Store form data in variables
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];

//Insert querry
//$user_registration_query = "insert into ecommerce.users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')";
$user_registration_query = "INSERT into ecommerce.users(email_id, first_name, last_name, phone) values ('$email', '$first_name', '$last_name', '$phone')"
or die(mysqli_error($con));

// Run query
$user_registration_submit = mysqli_query($con, $user_registration_query) ;
//die(mysqli_error($user_registration_submit));

echo "User Successfully Inserted";

?>